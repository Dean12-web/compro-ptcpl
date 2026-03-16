@extends('admin.layouts.app')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Pengaturan</h2>
@endsection
@section('content')
    <div class="w-full overflow-y-auto px-8 py-8">
        <div class="mb-6">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100">Pengaturan Sistem</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400">Kelola pengaturan sistem website</p>
        </div>
        <div x-data='{
                            section: @json(old('_section', session('activeSection', 'general'))),
                            editingGeneral: @json((bool) (old('_editing_general') ?? session('editingGeneral', false))),
                            editingSocial: @json((bool) (old('_editing_social') ?? session('editingSocial', false)))
                        }' class="flex flex-col lg:flex-row gap-6">

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

                <section x-show="section === 'admin'" x-cloak
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 text-sm text-slate-500 dark:text-slate-400">
                        Opsi admin akan ditambahkan nanti.
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection