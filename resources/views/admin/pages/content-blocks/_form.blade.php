<x-admin.modal name="add-web-section" title="Konten Web">
    <form id="websiteContentForm" enctype="multipart/form-data" x-data="websiteContentForm()"
        @submit.prevent="submitForm">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">add_box</span>
        </x-slot>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5 col-span-full">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Block Key
                </label>
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="home_about, home_hero, about_company" name="key" type="text" x-model="key" required />
                <p class="text-xs text-gray-500 mt-1">
                    Key unik untuk section konten ini.
                    Gunakan huruf kecil dan underscore.
                    Contoh: <b>home_about</b>, <b>home_hero</b>, <b>about_company</b>.
                </p>
                <p x-show="errors.key" x-text="errors.key" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Block Type</label>
                <select name="block_type" x-model="block_type"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all">
                    <option>Pilih block type</option>
                    <option value="single">Single</option>
                    <option value="multiple">Multiple</option>
                </select>
                <p x-show="errors.block_type" x-text="errors.block_type" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Locale</label>
                <select name="locale" x-model="locale"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all">
                    <option>Pilih bahasa</option>
                    <option value="en">EN</option>
                    <option value="id">ID</option>
                </select>
                <p x-show="errors.locale" x-text="errors.locale" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div
            class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-primary/10">
            <div class="flex flex-col">
                <p class="text-sm font-bold">Konten Web Status</p>
                <p class="text-xs text-slate-500">Tetapkan apakah konten web tersebut tersedia</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-xs font-bold uppercase" :class="active ? 'text-slate-400' : 'text-red-500'">
                    Tidak aktif
                </span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="hidden" name="is_active" value="0">
                    <input name="is_active" value="1" x-model="active" class="sr-only peer" type="checkbox">
                    <div
                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                    </div>
                </label>
                <span class="text-xs font-bold uppercase text-primary"
                    :class="active ? 'text-primary' : 'text-slate-400'">
                    Aktif
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-5 md:grid-cols-2 gap-4">

            <h2 class="text-l font-bold uppercase text-slate-500 col-span-full">
                Block Fields
            </h2>

            <template x-for="(field, index) in fields" :key="index">

                <div class="border border-primary/10 rounded-xl p-4 space-y-3 mt-4 col-span-full">

                    <div>
                        <label class="text-xs font-bold uppercase text-slate-500">Field Key</label>

                        <input type="text" :name="`items[${index}][field_key]`" x-model="field.field_key" :disabled="mode === 'edit'"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg"
                            placeholder="judul, deskripsi, image">

                    </div>

                    <div>
                        <label class="text-xs font-bold uppercase text-slate-500">Field Label</label>

                        <input type="text" :name="`items[${index}][field_label]`" x-model="field.field_label"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg"
                            placeholder="Title / Deskripsi / Gambar">

                    </div>

                    <div>
                        <label class="text-xs font-bold uppercase text-slate-500">Field Type</label>

                        <select :name="`items[${index}][field_type]`" x-model="field.field_type" :disabled="mode === 'edit'"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg">

                            <option value="">Pilih Field Type</option>
                            <option value="text">Text</option>
                            <option value="textarea">Textarea</option>
                            <option value="image">Image</option>
                            <option value="number">Number</option>
                            <option value="link">Link</option>

                        </select>

                    </div>

                    <div x-show="mode === 'edit'">
                        <label class="text-xs font-bold uppercase text-slate-500">Field Value</label>

                        <input type="text" :name="`items[${index}][field_value]`" x-model="field.field_value"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg"
                            placeholder="Isi konten">
                    </div>

                    <button type="button" @click="removeField(index)" class="text-xs text-red-500 hover:text-red-700">

                        Hapus Field

                    </button>

                </div>

            </template>

            <button x-show="block_type === 'multiple'" type="button" @click="addField()"
                class="mt-4 bg-primary text-white px-4 py-2 rounded-lg text-sm">

                + Tambah Field

            </button>

        </div>


    </form>
    <x-slot name="footer">
        <button @click="$dispatch('close-modal','add-web-section')"
            class="px-5 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-lg">
            Batal
        </button>

        <button type="submit" form="websiteContentForm"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
            <span class="material-symbols-outlined !text-lg">save</span>
            Simpan
        </button>

    </x-slot>
</x-admin.modal>
<script>
    function websiteContentForm() {
        return {

            mode: 'create',
            key: '',
            locale: '',
            block_type: '',
            active: true,
            errors: {},

            fields: [
                {
                    field_key: '',
                    field_label: '',
                    field_type: 'text',
                    field_value: ''
                }
            ],
            async submitForm(event) {
                this.errors = {}
                let formData = new FormData()

                formData.append('key', this.key)
                formData.append('locale', this.locale)
                formData.append('block_type', this.block_type)
                formData.append('is_active', this.active ? 1 : 0)

                this.fields.forEach((field, index) => {
                    formData.append(`items[${index}][field_key]`, field.field_key)
                    formData.append(`items[${index}][field_label]`, field.field_label)
                    formData.append(`items[${index}][field_type]`, field.field_type)
                    formData.append(`items[${index}][field_value]`, field.field_value)
                });

                for (let [key, value] of formData.entries()) {
                    console.log(key, value)
                }

                let url = `/cpl-admin/web-content`
                let method = 'POST'

                const res = await fetch(url, {
                    method: method,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })

                const data = await res.json()

                if (data.success) {
                    window.dispatchEvent(
                        new CustomEvent('notify', {
                            detail: 'Web Content Berhasil dibuat!'
                        })
                    )

                    this.resetForm()

                    window.dispatchEvent(
                        new CustomEvent('close-modal', {
                            detail: 'add-web-section'
                        })
                    )
                }
            },
            resetForm() {
                this.mode = 'create'

                this.key = ''
                this.active = ''
                this.locale = ''
                this.block_type = ''

                this.fields = [
                    {
                        field_key: '',
                        field_label: '',
                        field_type: 'text',
                        field_value: ''
                    }
                ]

                this.errors = {}
            },

            init() {
                this.$watch('block_type', (value) => {
                    if (value === 'single') {
                        this.fields = [
                            {
                                field_key: '',
                                field_label: '',
                                field_type: 'text',
                                field_value: ''
                            }
                        ]
                    }
                })
            },

            addField() {

                if (this.block_type === 'single') return

                this.fields.push({
                    field_key: '',
                    field_label: '',
                    field_type: 'text',
                    field_value: ''
                })

            },

            removeField(index) {

                if (this.block_type === 'single') return

                this.fields.splice(index, 1)

            }

        }
    }
</script>