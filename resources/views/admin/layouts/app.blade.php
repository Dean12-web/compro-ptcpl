<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Dashboard')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('images/logo/icon_cpl.ico') }}" rel="icon" />
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .form-input {
            @apply w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
    <div class="flex h-screen overflow-hidden relative">
        @include('admin.layouts.sidebar')

        <div id="sidebarOverlay" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden"></div>
        <main class="flex-1 flex flex-col overflow-hidden w-full">
            @include('admin.layouts.header')
            @yield('content')
        </main>
    </div>
</body>

</html>