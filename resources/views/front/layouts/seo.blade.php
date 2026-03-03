<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title>@yield('title',__('seo.home.title'))</title>

<meta name="description" content="@yield('meta_description', __('seo.home.description'))">

<meta name="keywords" content="@yield('meta_keywords', __('seo.home.keywords'))">
<meta name="author" content="Cendana Paper Egg Tray">

{{-- Canonical URL --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph --}}
<meta property="og:title" content="@yield('og_title',__('seo.home.title'))">
<meta property="og:description" content="@yield('og_description',__('seo.home.description'))">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="Cendana Paper Egg Tray">

{{-- Default OG Image --}}
<meta property="og:image" content="@yield('og_image', asset('images/logo/logo_cpl.png'))">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
