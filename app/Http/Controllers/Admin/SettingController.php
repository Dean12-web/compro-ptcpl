<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        if (! $setting) {
            $setting = new Setting();
        }

        return view('admin.pages.settings.index', compact('setting'));
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
}
