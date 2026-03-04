<aside class="w-64 flex-shrink-0 bg-white dark:bg-zinc-900 border-r border-primary/10 flex flex-col">
    <div class="p-6 flex items-center gap-3">
        <div class="size-10 rounded-lg flex items-center justify-center text-white">
            <img src="{{ asset('images/logo/icon_cpl.png') }}" alt="log_cendana_paper_egg_tray">
        </div>
        <div>
            <h1 class="font-bold text-lg leading-tight text-primary">CPL</h1>
            <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Admin Panel</p>
        </div>
    </div>
    <nav class="flex-1 px-4 space-y-1 overflow-y-auto">
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors {{ is_active('cpl.dashboard') }}" href="{{ route('cpl.dashboard') }}">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            <span class="text-sm font-medium">Dashboard</span> 
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors"
            href="{{ route('cpl.products') }}">
            <span class="material-symbols-outlined text-[20px]">inventory_2</span>
            <span class="text-sm font-medium">Products</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors"
            href="{{ route('cpl.gallery') }}">
            <span class="material-symbols-outlined text-[20px]">photo_library</span>
            <span class="text-sm font-medium">Gallery</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors"
            href="{{ route('cpl.export-country') }}">
            <span class="material-symbols-outlined text-[20px]">public</span>
            <span class="text-sm font-medium">Export Countries</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors"
            href="{{ route('cpl.web-content') }}">
            <span class="material-symbols-outlined text-[20px]">view_quilt</span>
            <span class="text-sm font-medium">Web Sections</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors"
            href="{{ route('cpl.inquiry-view') }}">
            <span class="material-symbols-outlined text-[20px]">chat_bubble</span>
            <span class="text-sm font-medium">Inquiries</span>
            <span class="ml-auto bg-primary/20 text-primary text-[10px] px-1.5 py-0.5 rounded-full font-bold">18</span>
        </a>
    </nav>
    <div class="p-4 border-t border-primary/10">
        <div class="flex items-center gap-3 px-2">
            <div class="size-8 rounded-full bg-slate-200 dark:bg-zinc-800 bg-cover bg-center"
                data-alt="User profile avatar circle"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBKsqXZWUwL6BO8jOZCK2cSLsArBwUf5hAWsB-pxihjhvpvjqJiBDA5xe6G6v7sENKmxPr0GWEZEPOLNDLXwKhKHbUYyTwseaUAesSCEXr3EHS6rsnusuQDLeuIqt_vRU5to3So8LeR2BpwVsD2Fk_p8czgovI8yNL9_55XRM9jzgHOWbciItl_C-S85I7zymliYpxob75tJ_z0OzsL6w2XmElhl8EEES2bH0guz9Vc_EUCrU5IgPHnpqqz7S38NflU6PUxsx9Q59MC')">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold truncate">Administrator</p>
                <p class="text-xs text-slate-500 truncate">admin@ptcpl.com</p>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="text-slate-400 hover:text-primary">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>