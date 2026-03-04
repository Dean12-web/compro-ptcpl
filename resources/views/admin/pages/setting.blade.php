@extends('admin.layouts.app')

@section('content')
     <main class="flex-1 overflow-y-auto">
        <!-- Top Header -->
        <header
            class="h-16 border-b border-primary/10 bg-white dark:bg-background-dark/80 backdrop-blur flex items-center justify-between px-8 sticky top-0 z-10">
            <h2 class="font-semibold text-lg">System Settings</h2>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-500 hover:bg-primary/10 rounded-full transition-colors">
                    <span class="material-icons-round">notifications</span>
                </button>
                <div class="h-8 w-[1px] bg-primary/20"></div>
                <button
                    class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                    <span class="material-icons-round text-sm">save</span>
                    Save Changes
                </button>
            </div>
        </header>
        <!-- Content Area -->
        <div class="p-8 max-w-5xl mx-auto">
            <!-- Tabs Navigation -->
            <div class="flex border-b border-primary/10 mb-8 overflow-x-auto scrollbar-hide">
                <button
                    class="px-6 py-4 text-sm font-bold border-b-2 border-primary text-primary whitespace-nowrap">General</button>
                <button class="px-6 py-4 text-sm font-medium text-slate-500 hover:text-primary whitespace-nowrap">SEO
                    &amp; Localization</button>
                <button
                    class="px-6 py-4 text-sm font-medium text-slate-500 hover:text-primary whitespace-nowrap">Security
                    &amp; Account</button>
                <button
                    class="px-6 py-4 text-sm font-medium text-slate-500 hover:text-primary whitespace-nowrap">System</button>
            </div>
            <div class="space-y-8">
                <!-- Section 1: General Settings -->
                <section
                    class="bg-white dark:bg-background-dark/40 rounded-xl border border-primary/10 overflow-hidden">
                    <div class="p-6 border-b border-primary/10 bg-primary/5">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-icons-round text-primary">business</span>
                            General Settings
                        </h3>
                        <p class="text-sm text-slate-500 mt-1">Configure basic information about your company.</p>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Company
                                    Name</label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                    type="text" value="PT Cipta Perdana Lestari" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Contact
                                    Email</label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                    type="email" value="info@cpl.co.id" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Phone
                                    Number</label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                    type="tel" value="+62 21 555 0123" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Address</label>
                                <textarea
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                    rows="1">Jl. Industri Raya No. 45, Tangerang, Banten</textarea>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Logo</label>
                            <div
                                class="flex items-center gap-6 p-4 border-2 border-dashed border-primary/20 rounded-xl bg-slate-50/50 dark:bg-background-dark/50">
                                <div
                                    class="w-20 h-20 bg-white dark:bg-slate-800 rounded-lg border border-primary/10 flex items-center justify-center overflow-hidden">
                                    <img alt="Current Logo" class="max-w-[80%]"
                                        data-alt="Industrial company logo placeholder with abstract shape"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuATZYlnRGh5pGOksn-tVFBaxVdawu7Yv5cOPB7wwKHxPKNFkJFPdNvl8WVQ24Zt-oUt3AIMzdlkjmkAzzSPTu2bv5YosZzv2f9P7YzWnAQET3QOe5QJBjPar4fKnEM-mLrGGlAdvX4KlfGr-T7ezhDZKVJnN4T-KgFmwYst6lDrkPo0X1DXjMuqHxfNnTa3nDXnv9T1hzUvuTIxU03mr9QH6-vrpJvivo1QKVhx__tw9ehDKZCiLdIS8EL2pYUedsq5SIdjVSlGN_1M" />
                                </div>
                                <div>
                                    <button
                                        class="bg-primary/10 text-primary px-4 py-2 rounded-lg text-sm font-bold hover:bg-primary/20 transition-all">Upload
                                        New Logo</button>
                                    <p class="text-xs text-slate-500 mt-2">Recommended size: 512x512px. PNG or SVG
                                        preferred.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section 2: SEO & Localization -->
                <section
                    class="bg-white dark:bg-background-dark/40 rounded-xl border border-primary/10 overflow-hidden">
                    <div class="p-6 border-b border-primary/10 bg-primary/5">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-icons-round text-primary">language</span>
                            SEO &amp; Localization
                        </h3>
                        <p class="text-sm text-slate-500 mt-1">Manage how your site appears in search engines and
                            regional settings.</p>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Default Meta
                                Title</label>
                            <input
                                class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                type="text" value="PT CPL - Leading Industrial Solutions Provider" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Meta
                                Description</label>
                            <textarea
                                class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                rows="3">Professional manufacturing and industrial services providing high-quality parts and assembly for global markets.</textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Primary
                                    Language</label>
                                <select
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all">
                                    <option value="id">Bahasa Indonesia (ID)</option>
                                    <option selected="" value="en">English (EN)</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Timezone</label>
                                <select
                                    class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all">
                                    <option value="gmt7">(GMT+07:00) Jakarta</option>
                                    <option value="gmt8">(GMT+08:00) Singapore</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section 3: Security & Account -->
                <section
                    class="bg-white dark:bg-background-dark/40 rounded-xl border border-primary/10 overflow-hidden">
                    <div class="p-6 border-b border-primary/10 bg-primary/5">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-icons-round text-primary">security</span>
                            Security &amp; Account
                        </h3>
                        <p class="text-sm text-slate-500 mt-1">Keep your administrator account secure.</p>
                    </div>
                    <div class="p-6 space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Change Password
                                </h4>
                                <div class="space-y-3">
                                    <input
                                        class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                        placeholder="Current Password" type="password" />
                                    <input
                                        class="w-full bg-slate-50 dark:bg-background-dark border-primary/20 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary transition-all"
                                        placeholder="New Password" type="password" />
                                    <button class="text-primary text-sm font-bold hover:underline">Update
                                        Password</button>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Two-Factor
                                    Authentication</h4>
                                <div
                                    class="flex items-center justify-between p-4 bg-primary/5 rounded-xl border border-primary/10">
                                    <div>
                                        <p class="text-sm font-bold">2FA Security</p>
                                        <p class="text-xs text-slate-500 mt-1">Add an extra layer of security to your
                                            login.</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" value="" />
                                        <div
                                            class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section 4: System -->
                <section
                    class="bg-white dark:bg-background-dark/40 rounded-xl border border-primary/10 overflow-hidden mb-12">
                    <div class="p-6 border-b border-primary/10 bg-primary/5">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-icons-round text-primary">dns</span>
                            System Settings
                        </h3>
                        <p class="text-sm text-slate-500 mt-1">Technical configuration and maintenance controls.</p>
                    </div>
                    <div class="p-6 space-y-6">
                        <div
                            class="flex items-center justify-between p-4 border border-red-200 dark:border-red-900/30 bg-red-50 dark:bg-red-950/20 rounded-xl">
                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-red-100 dark:bg-red-900/50 text-red-600 rounded-full flex items-center justify-center">
                                    <span class="material-icons-round">construction</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-red-900 dark:text-red-100">Maintenance Mode</p>
                                    <p class="text-xs text-red-700 dark:text-red-400">Public site will show a "Under
                                        Construction" page. Admin remains accessible.</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input class="sr-only peer" type="checkbox" value="" />
                                <div
                                    class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600">
                                </div>
                            </label>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="text-sm font-semibold">API Key Management</h4>
                                <button class="text-primary text-xs font-bold flex items-center gap-1 hover:underline">
                                    <span class="material-icons-round text-xs">add</span>
                                    Generate New Key
                                </button>
                            </div>
                            <div
                                class="bg-slate-50 dark:bg-background-dark border border-primary/10 rounded-lg p-3 flex items-center justify-between">
                                <code class="text-xs text-primary font-mono">cpl_live_9420583195015820</code>
                                <div class="flex gap-2">
                                    <button class="p-1.5 hover:bg-primary/10 rounded text-slate-500"><span
                                            class="material-icons-round text-sm">content_copy</span></button>
                                    <button class="p-1.5 hover:bg-red-100 rounded text-red-500"><span
                                            class="material-icons-round text-sm">delete</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Mobile Footer Actions -->
            <div
                class="md:hidden fixed bottom-0 left-0 right-0 p-4 bg-white dark:bg-background-dark border-t border-primary/10 flex justify-end">
                <button
                    class="bg-primary text-white w-full py-3 rounded-lg text-sm font-bold flex items-center justify-center gap-2">
                    <span class="material-icons-round text-sm">save</span>
                    Save Changes
                </button>
            </div>
        </div>
    </main>
@endsection