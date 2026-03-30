<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SeoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password as PasswordRule;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $setting = Setting::first();

        if (! $setting) {
            $setting = new Setting();
        }

        $seoPages = config('seo.pages', []);
        $seoLocales = config('seo.locales', []);
        $availablePages = array_keys($seoPages);
        $availableLocales = array_keys($seoLocales);

        $seoEntries = SeoPage::whereIn('page', $availablePages)->get();

        $seoEntriesMap = [];
        foreach ($seoEntries as $entry) {
            $seoEntriesMap[$entry->page][$entry->locale] = Arr::only($entry->toArray(), ['title', 'description', 'keywords', 'og_image']);
        }

        $seoDefaults = [];
        foreach ($availablePages as $page) {
            foreach ($availableLocales as $locale) {
                $seoDefaults[$page][$locale] = [
                    'title' => trans("seo.{$page}.title", [], $locale),
                    'description' => trans("seo.{$page}.description", [], $locale),
                    'keywords' => trans("seo.{$page}.keywords", [], $locale),
                    'og_image' => null,
                ];
            }
        }

        $initialPage = old('page', $availablePages[0] ?? null);
        $initialLocale = old('locale', $availableLocales[0] ?? null);
        $initialSeoValues = [
            'title' => old('title'),
            'description' => old('description'),
            'keywords' => old('keywords'),
            'og_image' => old('og_image'),
            'page' => old('page'),
            'locale' => old('locale'),
        ];

        $hasSeoOldInput = $request->session()->hasOldInput('page');

        return view('admin.pages.settings.index', compact(
            'setting',
            'seoPages',
            'seoLocales',
            'seoEntriesMap',
            'seoDefaults',
            'initialPage',
            'initialLocale',
            'initialSeoValues',
            'hasSeoOldInput'
        ));
    }

    public function updateGeneral(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'nullable|string|max:255',
            'company_email' => 'nullable|email|max:255',
            'company_phone' => 'nullable|string|max:32',
            'whatsapp' => 'nullable|string|max:32',
            'company_address' => 'nullable|string|max:2000',
            'google_maps' => 'nullable|url|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cpl.setting')
                ->withErrors($validator)
                ->withInput()
                ->with('activeSection', 'general')
                ->with('editingGeneral', true);
        }

        $setting = Setting::first() ?? new Setting();
        $setting->fill($validator->validated());
        $setting->save();

        return redirect()->route('cpl.setting')
            ->with('status', 'Informasi umum berhasil disimpan.')
            ->with('activeSection', 'general');
    }

    public function updateSocial(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cpl.setting')
                ->withErrors($validator)
                ->withInput()
                ->with('activeSection', 'social');
        }

        $setting = Setting::first() ?? new Setting();
        $setting->fill($validator->validated());
        $setting->save();

        return redirect()->route('cpl.setting')
            ->with('status', 'Link media sosial berhasil disimpan.')
            ->with('activeSection', 'social');
    }

    public function updateSeo(Request $request)
    {
        $pages = array_keys(config('seo.pages', []));
        $locales = array_keys(config('seo.locales', []));

        $validator = Validator::make($request->all(), [
            'page' => ['required', Rule::in($pages)],
            'locale' => ['required', Rule::in($locales)],
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:2000',
            'keywords' => 'nullable|string|max:1000',
            'og_image' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cpl.setting')
                ->withErrors($validator)
                ->withInput()
                ->with('activeSection', 'seo');
        }

        $data = $validator->validated();

        SeoPage::updateOrCreate(
            Arr::only($data, ['page', 'locale']),
            Arr::only($data, ['title', 'description', 'keywords', 'og_image'])
        );

        Cache::forget("seo_page:{$data['page']}:{$data['locale']}");

        return redirect()->route('cpl.setting')
            ->with('seoStatus', 'Pengaturan SEO berhasil disimpan.')
            ->with('activeSection', 'seo');
    }

    public function updateAdminPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', PasswordRule::defaults(), 'confirmed'],
        ], [
            'current_password.required' => 'Password saat ini wajib diisi.',
            'current_password.current_password' => 'Password saat ini tidak cocok.',
            'password.required' => 'Password baru wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak sama.',
            'password.min' => 'Password minimal :min karakter.',
        ]);
        if ($validator->fails()) {
            return redirect()->route('cpl.setting')
                ->withErrors($validator, 'updatePassword')
                ->withInput()
                ->with('activeSection', 'admin');
        }

        $request->user()->update([
            'password' => Hash::make($validator->validated()['password']),
        ]);

        return redirect()->route('cpl.setting')
            ->with('success', 'Password admin berhasil diperbarui.')
            ->with('activeSection', 'admin');
    }
}
