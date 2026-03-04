@extends('admin.layouts.app')
@section('title', 'Galeri')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Gallery</h2>
@endsection
@section('content')
    <div class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark overflow-y-auto">
        <div class="flex flex-wrap justify-between items-end gap-4 p-6 md:p-8">
            <div class="flex flex-col gap-1">
                <h2 class="text-slate-900 dark:text-slate-100 text-3xl font-black leading-tight tracking-tight">
                    Gallery Management</h2>
                <p class="text-slate-500 text-base font-normal">Review, categorize, and update public
                    industrial assets</p>
            </div>
            <div class="flex gap-3">
                <button
                    class="flex items-center gap-2 rounded-lg h-10 px-4 bg-white border border-primary/20 text-slate-700 font-bold text-sm shadow-sm hover:bg-slate-50 transition-all">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Export Data
                </button>
                <button
                    class="flex items-center gap-2 rounded-lg h-10 px-4 bg-primary text-white font-bold text-sm shadow-lg shadow-primary/20 hover:brightness-110 transition-all">
                    <span class="material-symbols-outlined text-sm">add_photo_alternate</span>
                    Upload Assets
                </button>
            </div>
        </div>
        <div class="px-6 md:px-8 pb-4">
            <div class="flex flex-wrap gap-2 border-b border-primary/10 pb-4">
                <button
                    class="px-4 py-1.5 rounded-full bg-primary text-white text-xs font-bold uppercase tracking-wider">All
                    Assets</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-primary/10 text-xs font-bold uppercase tracking-wider hover:border-primary transition-all">Factory
                    Floor</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-primary/10 text-xs font-bold uppercase tracking-wider hover:border-primary transition-all">Production
                    Line</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-primary/10 text-xs font-bold uppercase tracking-wider hover:border-primary transition-all">Packaging</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-primary/10 text-xs font-bold uppercase tracking-wider hover:border-primary transition-all">Logistics</button>
            </div>
        </div>
        <div class="px-6 md:px-8 py-4">
            <div
                class="flex flex-col items-center gap-4 rounded-xl border-2 border-dashed border-primary/30 bg-primary/5 px-6 py-10 transition-all hover:bg-primary/10 group cursor-pointer">
                <div
                    class="bg-white dark:bg-slate-800 p-4 rounded-full shadow-md text-primary group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-4xl">cloud_upload</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                    <p class="text-slate-900 dark:text-slate-100 text-lg font-bold tracking-tight text-center">
                        Drag and drop industrial assets here</p>
                    <p class="text-slate-500 text-sm font-normal text-center">Support for High-Res JPEG,
                        PNG, or WEBP (Max 20MB per file)</p>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="h-px w-12 bg-primary/20"></div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">or</span>
                    <div class="h-px w-12 bg-primary/20"></div>
                </div>
                <button
                    class="px-6 py-2 bg-white dark:bg-slate-800 border border-primary/20 rounded-lg text-primary font-bold text-sm hover:shadow-md transition-all">
                    Browse Local Storage
                </button>
            </div>
        </div>
        <div class="px-6 md:px-8 py-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-primary/5 hover:shadow-md transition-all group">
                    <div class="relative aspect-video overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Close up of high precision industrial machinery parts"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkhzSww2t7gViiBeuhUFlDhR5flazn0_ekYs30IFgkhdmqoaiFH6lic8MSet2Dd_8WF8_Ctdw3AdQxHx03AlZbpABeYT4iE1yhje_hlFYXyfseL-UkH8K2fVvHnMlvOYMUoFl31Kmv3QLBpJ46a-FjFWybXkMDHuET-pIWhG4WQItBAZlsuvxFM9xOB-a3q5PsqQ8SJsHDJab3ziz88RWQZ5ou9XKDnlOPwzwAwctny6nr4gjuylmgLY6JLBQwEQ2OWcLbg4cLdH6A" />
                        <div
                            class="absolute top-3 left-3 px-2 py-1 bg-black/60 backdrop-blur-sm rounded text-[10px] text-white font-bold uppercase tracking-wider">
                            Production</div>
                        <div class="absolute top-3 right-3 flex gap-1">
                            <button
                                class="size-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-slate-700 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-slate-900 dark:text-slate-100 font-bold text-sm truncate">
                                    CNC-Router-Unit-04.jpg</h3>
                                <p class="text-slate-400 text-xs mt-0.5">Uploaded Oct 24, 2023</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative inline-flex items-center cursor-pointer">
                                    <div class="w-8 h-4 bg-primary rounded-full transition-colors"></div>
                                    <div
                                        class="absolute left-4.5 w-3 h-3 bg-white rounded-full transition-transform translate-x-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-primary/5">
                            <span class="text-[10px] font-bold text-primary uppercase">Status: Active</span>
                            <button class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-primary/5 hover:shadow-md transition-all group opacity-75">
                    <div class="relative aspect-video overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale"
                            data-alt="Spacious factory warehouse interior with high ceilings"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqc0nb-lXLtqOsNZkA3u0fhWPkTTokUNjz865o2QhrISGhrG2WygltDlPLGTh_3qAMn6DJmmcuUOocqpcz5AEfL07_QBJHlWzcPge_ITqPW_04NehoISsAqsnwnWa0rugKv1DRoulUnJtt925hR45ZWZYf8lMf3M6WIaM-sIhq_d0lVWq2GCARq0717K0K8sgfCfjOQgEbfdB8QDgaU7dgoBhb5lxnAom8o5rkqcqceGeT-j-m_IVi5TpyzhWhs6gQB9oarze-ZvGS" />
                        <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest bg-black/40 px-3 py-1 rounded">Inactive</span>
                        </div>
                        <div
                            class="absolute top-3 left-3 px-2 py-1 bg-black/60 backdrop-blur-sm rounded text-[10px] text-white font-bold uppercase tracking-wider">
                            Factory</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-slate-900 dark:text-slate-100 font-bold text-sm truncate">
                                    West-Wing-Storage.png</h3>
                                <p class="text-slate-400 text-xs mt-0.5">Uploaded Oct 22, 2023</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative inline-flex items-center cursor-pointer">
                                    <div class="w-8 h-4 bg-slate-300 rounded-full transition-colors"></div>
                                    <div class="absolute left-1 w-3 h-3 bg-white rounded-full transition-transform">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-primary/5">
                            <span class="text-[10px] font-bold text-slate-400 uppercase">Status:
                                Offline</span>
                            <button class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-primary/5 hover:shadow-md transition-all group">
                    <div class="relative aspect-video overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Eco friendly cardboard packaging boxes stacked in warehouse"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfPoqvGyFlON9BcEDw4otBbTuLWTIyaicQYV5CabbfdLECRoa8SY1Y38eqhVQa-qfFYFB4i7fPhZBeQxjPygSV-xPhBrKQryEP8SLYmmVhAXt3Wk-kU1AywrtYFHMgt6Z06SgjjChif9l39Bdx-q32UOkv_JyjLLVhf2mUwlkLhkd8XvMw9-DudgIdBYgiMIq0TBrQ1B6kkGpx_VhNc0Pw6QvAYDUMfMizh92wVYsE7IcRWX5pOH53D7q2KvoWJptNQYw6ICo2cKI9" />
                        <div
                            class="absolute top-3 left-3 px-2 py-1 bg-black/60 backdrop-blur-sm rounded text-[10px] text-white font-bold uppercase tracking-wider">
                            Packaging</div>
                        <div class="absolute top-3 right-3 flex gap-1">
                            <button
                                class="size-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-slate-700 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-slate-900 dark:text-slate-100 font-bold text-sm truncate">
                                    Export-Ready-Units.jpg</h3>
                                <p class="text-slate-400 text-xs mt-0.5">Uploaded Oct 15, 2023</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative inline-flex items-center cursor-pointer">
                                    <div class="w-8 h-4 bg-primary rounded-full transition-colors"></div>
                                    <div
                                        class="absolute left-4.5 w-3 h-3 bg-white rounded-full transition-transform translate-x-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-primary/5">
                            <span class="text-[10px] font-bold text-primary uppercase">Status: Active</span>
                            <button class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-primary/5 hover:shadow-md transition-all group">
                    <div class="relative aspect-video overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Worker in safety gear inspecting industrial equipment"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZGaljYsEpatQ99BAqg6I6Kp-J_5oqX5PRVJf6E0mBbSQGt6apxFKZDl7pdLhkZIoZOKCWxRGbkP0uNJIBQHXFVTMH6rLVpFM1C33E06MlAKYyn4ET7nVDYN3rrebp0juFOYn_xRts-dK3GJ_jhI2lKtD4BOdjcfx8PrqP3A4LBYM7oQy8Dqa7LPsPH0zfuvUVyijQLccJuHQVWL1UmRvuci2JiYksELzavioYaJDjh831OuFw0JiatzhQbxWDVXD5IFCxYu-i7alu" />
                        <div
                            class="absolute top-3 left-3 px-2 py-1 bg-black/60 backdrop-blur-sm rounded text-[10px] text-white font-bold uppercase tracking-wider">
                            Production</div>
                        <div class="absolute top-3 right-3 flex gap-1">
                            <button
                                class="size-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-slate-700 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-slate-900 dark:text-slate-100 font-bold text-sm truncate">
                                    Quality-Control-Floor.jpg</h3>
                                <p class="text-slate-400 text-xs mt-0.5">Uploaded Oct 10, 2023</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative inline-flex items-center cursor-pointer">
                                    <div class="w-8 h-4 bg-primary rounded-full transition-colors"></div>
                                    <div
                                        class="absolute left-4.5 w-3 h-3 bg-white rounded-full transition-transform translate-x-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-primary/5">
                            <span class="text-[10px] font-bold text-primary uppercase">Status: Active</span>
                            <button class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex items-center justify-between border-t border-primary/10 pt-6">
                <p class="text-sm text-slate-500">Showing <span
                        class="font-bold text-slate-900 dark:text-slate-100">1</span> to <span
                        class="font-bold text-slate-900 dark:text-slate-100">12</span> of <span
                        class="font-bold text-slate-900 dark:text-slate-100">48</span> assets</p>
                <div class="flex gap-2">
                    <button
                        class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-400 hover:text-primary transition-colors disabled:opacity-50"
                        disabled="">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="size-9 flex items-center justify-center rounded border border-primary/10 bg-primary text-white font-bold text-sm">1</button>
                    <button
                        class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-600 hover:bg-primary/5 font-bold text-sm">2</button>
                    <button
                        class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-600 hover:bg-primary/5 font-bold text-sm">3</button>
                    <button
                        class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection