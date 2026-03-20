<!DOCTYPE html>

<html class="light" lang="en">

<head>
    @include('front.layouts.seo')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('images/logo/icon_cpl.ico') }}" rel="icon" />

    @php
        $current_route = Route::currentRouteName();
        $params = request()->route()->parameters();
    @endphp

    <link rel="alternate" hreflang="en" href="{{ route($current_route, array_merge($params, ['locale' => 'en'])) }}">

    <link rel="alternate" hreflang="id" href="{{ route($current_route, array_merge($params, ['locale' => 'id'])) }}">

    <link rel="alternate" hreflang="x-default"
        href="{{ route($current_route, array_merge($params, ['locale' => 'en'])) }}">

</head>

<body class="bg-background-light font-display text-slate-900 antialiased">
    <div class="layout-container flex h-full grow flex-col">
        @include('front.layouts.header')
        <main class="flex flex-col flex-1">
            @yield('content')
        </main>
        @include('front.layouts.footer')
    </div>
</body>

</html>