<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
@php
    $routeName = Route::currentRouteName();
    $routeFallbacks = config('seo.route_fallbacks', []);
    $seoKey = $routeFallbacks[$routeName] ?? $routeName ?? 'home';
    $defaultSeoKey = $seoKey ?: 'home';

    $sectionTitle = trim($__env->yieldContent('title'));
    $sectionDescription = trim($__env->yieldContent('meta_description'));
    $sectionKeywords = trim($__env->yieldContent('meta_keywords'));
    $sectionOgTitle = trim($__env->yieldContent('og_title'));
    $sectionOgDescription = trim($__env->yieldContent('og_description'));

    $defaultTitle = trans("seo.{$defaultSeoKey}.title");
    $defaultDescription = trans("seo.{$defaultSeoKey}.description");
    $defaultKeywords = trans("seo.{$defaultSeoKey}.keywords");

    $seoTitle = $seo?->title ?? ($sectionTitle ?: $defaultTitle);
    $seoDescription = $seo?->description ?? ($sectionDescription ?: $defaultDescription);
    $seoKeywords = $seo?->keywords ?? ($sectionKeywords ?: $defaultKeywords);
    $seoOgTitle = $seo?->title ?? ($sectionOgTitle ?: $seoTitle);
    $seoOgDescription = $seo?->description ?? ($sectionOgDescription ?: $seoDescription);
    $seoOgImage = $seo?->og_image ?? asset('images/logo/logo_cpl.png');
@endphp

<title>{{ $seoTitle }}</title>

<meta name="description" content="{{ $seoDescription }}">

<meta name="keywords" content="{{ $seoKeywords }}">
<meta name="author" content="Cendana Paper Egg Tray">

{{-- Canonical URL --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $seoOgTitle }}">
<meta property="og:description" content="{{ $seoOgDescription }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="Cendana Paper Egg Tray">

{{-- Default OG Image --}}
<meta property="og:image" content="{{ $seoOgImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
