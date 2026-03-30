<?php

namespace App\Providers;

use App\Models\SeoPage;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('front.layouts.footer', fn($view) => $view->with('setting', Setting::first()));

        View::composer('*', function ($view) {

            $routeName = request()->route()?->getName();

            if (!$routeName) return;

            $fallbacks = config('seo.route_fallbacks', []);
            $seoKey = $fallbacks[$routeName] ?? $routeName;

            $locale = app()->getLocale();
            $cacheKey = "seo_page:{$seoKey}:{$locale}";

            $seo = Cache::remember($cacheKey, now()->addHour(), fn () => SeoPage::where('page', $seoKey)
                ->where('locale', $locale)
                ->first()
            );

            $view->with('seo', $seo);
        });
    }
}
