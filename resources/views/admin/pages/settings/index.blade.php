@extends('admin.layouts.app')
@section('title', 'Pengaturan')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Pengaturan</h2>
@endsection
@section('content')
    <div class="w-full overflow-y-auto px-8 py-8">
        <div class="mb-6">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100">Pengaturan Sistem</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400">Kelola pengaturan sistem website</p>
        </div>
        <div x-data="settingsPage()" class="flex flex-col lg:flex-row gap-6">

            <!-- Sidebar Navigation -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                <nav
                    class="flex lg:flex-col overflow-x-auto lg:overflow-visible gap-2 p-2 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">

                    <button type="button" @click="section = 'general'"
                        :class="section === 'general' ? 'flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold whitespace-nowrap' : 'flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap'">
                        <span class="material-symbols-outlined text-lg">info</span> General
                    </button>

                    <button type="button" @click="section = 'social'"
                        :class="section === 'social' ? 'flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold whitespace-nowrap' : 'flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap'">
                        <span class="material-symbols-outlined text-lg">language</span> Media Sosial
                    </button>
                    <button type="button" @click="section = 'seo'"
                        :class="section === 'seo' ? 'flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold whitespace-nowrap' : 'flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap'">
                        <span class="material-symbols-outlined text-lg">search_gear</span> SEO
                    </button>
                    <button type="button" @click="section = 'admin'"
                        :class="section === 'admin' ? 'flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold whitespace-nowrap' : 'flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap'">
                        <span class="material-symbols-outlined text-lg">terminal</span> Admin
                    </button>

                </nav>
            </aside>

            <!-- Content -->
                <div class="flex-1 space-y-6">

                @if (session('status'))
                    <div class="rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('seoStatus'))
                    <div class="rounded-xl border border-blue-200 bg-blue-50 px-4 py-3 text-sm text-blue-700">
                        {{ session('seoStatus') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        Silakan perbaiki kesalahan berikut:
                        <ul class="mt-2 space-y-1 list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('cpl.setting.update.general') }}" method="POST" class="space-y-6"
                    x-show="section === 'general'" x-cloak>
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="_section" value="general">

                    <section
                        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">

                        <div
                            class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">

                            <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                                Informasi Umum
                            </h3>

                            <div class="flex items-center gap-3">
                                <button type="button" @click="editingGeneral = !editingGeneral"
                                    class="px-3 py-1.5 rounded-lg border text-xs font-bold transition"
                                    :class="editingGeneral ? 'bg-primary text-white border-transparent' : 'border-slate-200 text-slate-600 dark:text-slate-300 bg-white dark:bg-slate-900'">
                                    <span x-text="editingGeneral ? 'Batal' : 'Edit'"></span>
                                </button>
                                <template x-if="editingGeneral">
                                    <input type="hidden" name="_editing_general" value="1">
                                </template>
                            </div>

                        </div>

                        <div class="p-6 space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Nama Perusahaan</label>
                                    <input name="company_name" value="{{ old('company_name', $setting->company_name) }}"
                                        :disabled="!editingGeneral"
                                        :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30"
                                        type="text" />
                                </div>

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Email Perusahaan</label>
                                    <input name="company_email" value="{{ old('company_email', $setting->company_email) }}"
                                        :disabled="!editingGeneral"
                                        :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30"
                                        type="email" />
                                </div>

                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Nomor Telepon</label>
                                    <input name="company_phone" value="{{ old('company_phone', $setting->company_phone) }}"
                                        :disabled="!editingGeneral"
                                        :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30"
                                        type="tel" />
                                </div>

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">WhatsApp</label>
                                    <input name="whatsapp" value="{{ old('whatsapp', $setting->whatsapp) }}"
                                        :disabled="!editingGeneral"
                                        :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30"
                                        type="tel" />
                                </div>

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Google Maps Link</label>
                                    <input name="google_maps" value="{{ old('google_maps', $setting->google_maps) }}"
                                        :disabled="!editingGeneral"
                                        :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30"
                                        type="url" />
                                </div>

                            </div>

                            <div class="space-y-1">

                                <label class="text-xs font-bold text-slate-500 uppercase">
                                    Alamat Kantor Pusat
                                </label>

                                <textarea rows="3" name="company_address" :disabled="!editingGeneral"
                                :class="!editingGeneral ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary disabled:cursor-not-allowed disabled:bg-slate-100 disabled:dark:bg-slate-800/30">{{ old('company_address', $setting->company_address) }}</textarea>

                            </div>

                        </div>

                        <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                            <button type="submit" :disabled="!editingGeneral"
                                class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2 disabled:opacity-60">
                                <span class="material-symbols-outlined text-sm">save</span>
                                Simpan Informasi Umum
                            </button>
                        </div>

                    </section>
                </form>

                <form action="{{ route('cpl.setting.update.seo') }}" method="POST" class="space-y-6"
                    x-show="section === 'seo'" x-cloak>
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="_section" value="seo">

                    <section
                        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden"
                        x-data="seoSettings"
                        x-init="initForm()"
                        data-seo-pages='@json($seoPages)'
                        data-seo-locales='@json($seoLocales)'
                        data-seo-entries='@json($seoEntriesMap)'
                        data-seo-defaults='@json($seoDefaults)'
                        data-seo-initial-page='@json($initialPage)'
                        data-seo-initial-locale='@json($initialLocale)'
                        data-seo-initial-values='@json($initialSeoValues)'
                        data-seo-has-old-input='@json($hasSeoOldInput)'>

                        <div
                            class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                                    SEO
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Kelola metadata default untuk halaman publik.
                                </p>
                            </div>
                        </div>

                        <div class="p-6 space-y-6">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Halaman</label>
                                    <select name="page" x-model="selectedPage" @change="loadEntry()"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary">
                                        <template x-for="pageKey in Object.keys(pages)" :key="pageKey">
                                            <option :value="pageKey" x-text="pages[pageKey]"></option>
                                        </template>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Bahasa</label>
                                    <select name="locale" x-model="selectedLocale" @change="loadEntry()"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary">
                                        <template x-for="localeKey in Object.keys(locales)" :key="localeKey">
                                            <option :value="localeKey" x-text="locales[localeKey]"></option>
                                        </template>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Title</label>
                                <input name="title" x-model="seoForm.title" type="text"
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary" />
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Description</label>
                                <textarea name="description" x-model="seoForm.description" rows="3"
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"></textarea>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Keywords</label>
                                <textarea name="keywords" x-model="seoForm.keywords" rows="2"
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"></textarea>
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Open Graph Image</label>
                                <input name="og_image" x-model="seoForm.og_image" type="url"
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                    placeholder="https://example.com/og-image.png" />
                            </div>

                        </div>

                        <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">save</span>
                                Simpan Metadata SEO
                            </button>
                        </div>

                    </section>
                </form>

                <form action="{{ route('cpl.setting.update.social') }}" method="POST" class="space-y-6"
                    x-show="section === 'social'" x-cloak>
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="_section" value="social">

                    <section
                        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">

                        <div
                            class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                                Media Sosial
                            </h3>
                            <div class="flex items-center gap-3">
                                <button type="button" @click="editingSocial = !editingSocial"
                                    class="px-3 py-1.5 rounded-lg border text-xs font-bold transition"
                                    :class="editingSocial ? 'bg-primary text-white border-transparent' : 'border-slate-200 text-slate-600 dark:text-slate-300 bg-white dark:bg-slate-900'">
                                    <span x-text="editingSocial ? 'Batal' : 'Edit'"></span>
                                </button>
                                <template x-if="editingSocial">
                                    <input type="hidden" name="_editing_social" value="1">
                                </template>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Facebook</label>
                                    <input name="facebook" value="{{ old('facebook', $setting->facebook) }}"
                                        :disabled="!editingSocial"
                                        :class="!editingSocial ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                        type="text" />
                                </div>

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">Instagram</label>
                                    <input name="instagram" value="{{ old('instagram', $setting->instagram) }}"
                                        :disabled="!editingSocial"
                                        :class="!editingSocial ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                        type="text" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-500 uppercase">TikTok</label>
                                    <input name="tiktok" value="{{ old('tiktok', $setting->tiktok) }}"
                                        :disabled="!editingSocial"
                                        :class="!editingSocial ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                        type="text" />
                                </div>
                            </div>

                        </div>

                        <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">save</span>
                                Simpan Media Sosial
                            </button>
                        </div>

                    </section>
                </form>

                <form action="{{ route('cpl.setting.update.password') }}" method="POST" class="space-y-6"
                    x-show="section === 'admin'"
                    x-cloak
                    x-ref="adminPasswordForm"
                    @submit.prevent="if (validateAdminForm()) $refs.adminPasswordForm.submit()">
                    @csrf
                    @method('PATCH')
                     @if(session('success'))
                        <div x-data="{ show:true }" x-show="show" x-transition
                            class="mt-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between px-4 py-3 space-x-4">

                            <span>{{ session('success') }}</span>

                            <button type="button" @click="show=false" class="text-xl leading-none">✕</button>

                        </div>
                    @endif
                    <section
                        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">

                        <div
                            class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                                Admin Password
                            </h3>
                        </div>

                        <div class="p-6 space-y-4">

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Kata Sandi Saat Ini</label>
                                <div class="relative">
                                    <input
                                        name="current_password"
                                        x-model="adminForm.current"
                                        @input="adminClientErrors.current = ''"
                                        :type="showCurrentPassword ? 'text' : 'password'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary pr-10"
                                    />
                                    <button
                                        type="button"
                                        @click="showCurrentPassword = !showCurrentPassword"
                                        class="absolute inset-y-0 right-2 flex items-center justify-center text-slate-500 hover:text-primary"
                                    >
                                        <span class="material-symbols-outlined" x-text="showCurrentPassword ? 'visibility_off' : 'visibility'"></span>
                                    </button>
                                </div>
                                <p class="text-xs text-red-600 mt-1" x-text="adminClientErrors.current" x-show="adminClientErrors.current"></p>
                                @error('current_password', 'updatePassword')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Kata Sandi Baru</label>
                                <div class="relative">
                                    <input
                                        name="password"
                                        x-model="adminForm.password"
                                        @input="adminClientErrors.password = ''"
                                        :type="showNewPassword ? 'text' : 'password'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary pr-10"
                                    />
                                    <button
                                        type="button"
                                        @click="showNewPassword = !showNewPassword"
                                        class="absolute inset-y-0 right-2 flex items-center justify-center text-slate-500 hover:text-primary"
                                    >
                                        <span class="material-symbols-outlined" x-text="showNewPassword ? 'visibility_off' : 'visibility'"></span>
                                    </button>
                                </div>
                                <p class="text-xs text-red-600 mt-1" x-text="adminClientErrors.password" x-show="adminClientErrors.password"></p>
                                @error('password', 'updatePassword')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Konfirmasi Kata Sandi Baru</label>
                                <div class="relative">
                                    <input
                                        name="password_confirmation"
                                        x-model="adminForm.confirmation"
                                        @input="adminClientErrors.confirmation = ''"
                                        :type="showConfirmPassword ? 'text' : 'password'"
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary pr-10"
                                    />
                                    <button
                                        type="button"
                                        @click="showConfirmPassword = !showConfirmPassword"
                                        class="absolute inset-y-0 right-2 flex items-center justify-center text-slate-500 hover:text-primary"
                                    >
                                        <span class="material-symbols-outlined" x-text="showConfirmPassword ? 'visibility_off' : 'visibility'"></span>
                                    </button>
                                </div>
                                <p class="text-xs text-red-600 mt-1" x-text="adminClientErrors.confirmation" x-show="adminClientErrors.confirmation"></p>
                                @error('password_confirmation', 'updatePassword')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                            <button
                                type="submit"
                                class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">lock</span>
                                Perbarui Password Admin
                            </button>
                        </div>
                    </section>
                   
                </form>

            </div>
        </div>
    </div>
@endsection
<script>
function settingsPage() {
    return {
        section: @json(old('_section', session('activeSection', 'general'))),
        editingGeneral: @json((bool) (old('_editing_general') ?? session('editingGeneral', false))),
        editingSocial: @json((bool) (old('_editing_social') ?? session('editingSocial', false))),

        showCurrentPassword: false,
        showNewPassword: false,
        showConfirmPassword: false,

        adminForm: {
            current: "",
            password: "",
            confirmation: ""
        },

        adminClientErrors: {
            current: "",
            password: "",
            confirmation: ""
        },

        validateAdminForm() {
            this.adminClientErrors = { current: "", password: "", confirmation: "" };
            let valid = true;

            if (!this.adminForm.current) {
                this.adminClientErrors.current = "Password saat ini wajib diisi.";
                valid = false;
            }

            if (!this.adminForm.password) {
                this.adminClientErrors.password = "Password baru wajib diisi.";
                valid = false;
            } else if (this.adminForm.password.length < 8) {
                this.adminClientErrors.password = "Password baru minimal 8 karakter.";
                valid = false;
            }

            if (this.adminForm.password !== this.adminForm.confirmation) {
                this.adminClientErrors.confirmation = "Konfirmasi password tidak sama.";
                valid = false;
            }

            return valid;
        }
    }
}

function seoSettings() {
    const tryParseJSON = (value) => {
        if (!value || value === 'null') return null;
        try {
            return JSON.parse(value);
        } catch {
            return null;
        }
    };

    const normalizeString = (value) => {
        if (value === undefined || value === null || value === '' || value === 'null') {
            return null;
        }

        return value;
    };

    return {
        pages: {},
        locales: {},
        entries: {},
        defaults: {},
        initialValues: {},
        hasOldInput: false,
        selectedPage: null,
        selectedLocale: null,
        seoForm: {
            title: "",
            description: "",
            keywords: "",
            og_image: ""
        },
        initForm() {
            const dataset = this.$el?.dataset ?? {};

            this.pages = tryParseJSON(dataset.seoPages) ?? {};
            this.locales = tryParseJSON(dataset.seoLocales) ?? {};
            this.entries = tryParseJSON(dataset.seoEntries) ?? {};
            this.defaults = tryParseJSON(dataset.seoDefaults) ?? {};
            this.initialValues = tryParseJSON(dataset.seoInitialValues) ?? {};
            this.hasOldInput = dataset.seoHasOldInput === '1' || dataset.seoHasOldInput === 'true';

            const availablePages = Object.keys(this.pages);
            const availableLocales = Object.keys(this.locales);

            this.selectedPage = normalizeString(dataset.seoInitialPage) ?? availablePages[0] ?? null;
            this.selectedLocale = normalizeString(dataset.seoInitialLocale) ?? availableLocales[0] ?? null;

            if (this.hasOldInput) {
                this.selectedPage = normalizeString(this.initialValues.page) ?? this.selectedPage;
                this.selectedLocale = normalizeString(this.initialValues.locale) ?? this.selectedLocale;
                this.seoForm.title = this.initialValues.title ?? "";
                this.seoForm.description = this.initialValues.description ?? "";
                this.seoForm.keywords = this.initialValues.keywords ?? "";
                this.seoForm.og_image = this.initialValues.og_image ?? "";
                return;
            }

            this.loadEntry();
        },
        loadEntry() {
            if (!this.selectedPage && !Object.keys(this.pages).length) {
                this.selectedPage = null;
            }

            if (!this.selectedLocale && !Object.keys(this.locales).length) {
                this.selectedLocale = null;
            }

            if (!this.selectedPage || !this.selectedLocale) {
                this.seoForm = { title: "", description: "", keywords: "", og_image: "" };
                return;
            }

            const entry = (this.entries[this.selectedPage] ?? {})[this.selectedLocale] ?? {};
            const fallback = (this.defaults[this.selectedPage] ?? {})[this.selectedLocale] ?? {};

            this.seoForm.title = entry.title ?? fallback.title ?? "";
            this.seoForm.description = entry.description ?? fallback.description ?? "";
            this.seoForm.keywords = entry.keywords ?? fallback.keywords ?? "";
            this.seoForm.og_image = entry.og_image ?? fallback.og_image ?? "";
        }
    };
}
</script>
