<header
    class="h-16 border-b border-primary/10 bg-white dark:bg-background-dark flex items-center justify-between px-4 md:px-8">
    <div class="flex items-center gap-4">
        <button id="sidebarToggle" class="lg:hidden p-2 text-slate-600 dark:text-slate-300" @click="sidebarOpen = !sidebarOpen">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div>
            @yield('page-header')
        </div>
    </div>
    <div class="flex items-center gap-4">
        @yield('page-actions')
    </div>
</header>
