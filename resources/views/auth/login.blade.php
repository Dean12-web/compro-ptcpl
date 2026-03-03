<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Cendana paper egg tray - Admin Login</title>
    <link href="{{ asset('images/logo/icon_cpl.ico') }}" rel="icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <style>
        body {
            font-family: "Public Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light min-h-screen flex flex-col font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/10 px-6 py-4 lg:px-40 bg-white">
                <div class="flex items-center gap-3 text-primary">
                    <div class="size-8 flex items-center justify-center rounded-lg text-white">
                        <img src="{{ asset('images/logo/icon_cpl.png') }}" alt="log_cendana_paper_egg_tray">
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-slate-900 text-lg font-bold leading-tight tracking-tight">
                            Cendana Paper Egg Tray</h2>
                        <span class="text-xs font-medium text-secondary uppercase tracking-widest">Sistem Manajemen Konten</span>
                    </div>
                </div>
            </header>
            <main class="flex-1 flex items-center justify-center p-6">
                <div
                    class="w-full max-w-[1100px] grid grid-cols-1 md:grid-cols-2 bg-white rounded-xl shadow-2xl shadow-primary/5 overflow-hidden border border-primary/5">
                    <div class="relative hidden md:flex flex-col justify-between p-12 bg-primary overflow-hidden">
                        <div
                            class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(circle_at_30%_20%,#8e9b66_0%,transparent_50%)]">
                        </div>
                        <div class="relative z-10">
                            <div class="text-white mb-8">
                                <span class="material-symbols-outlined text-5xl">shield_lock</span>
                            </div>
                            <h1 class="text-white text-4xl font-bold leading-tight mb-4">Akses Sistem dengan Aman
                            </h1>
                            <p class="text-white/80 text-lg max-w-sm">Kelola operasional dan logistik Cendana paper egg tray melalui portal manajemen.</p>
                        </div>
                        <div class="relative z-10 mt-20">
                            <div class="rounded-xl overflow-hidden border bg-background-light border-white/20 aspect-video bg-contain bg-center bg-no-repeat shadow-lg"
                                style="background-image: url('{{ asset('images/logo/logo_cpl.png') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center p-8 lg:p-16">
                        <div class="mb-10">
                            <h2 class="text-slate-900 text-3xl font-bold mb-2">Admin Portal</h2>
                            <p class="text-slate-500">Masukkan email dan kata sandi Anda untuk melanjutkan.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf
                            <div class="space-y-2">
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                        autofocus
                                        class="w-full pl-12 pr-4 py-3.5 bg-background-light border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900" />
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                                    <input id="password" name="password" type="password" required
                                        class="w-full pl-12 pr-12 py-3.5 bg-background-light border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900"/>

                                    @error('password')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <button
                                class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 group"
                                type="submit">
                                Masuk ke Sistem Manajemen Konten
                                <span
                                    class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>