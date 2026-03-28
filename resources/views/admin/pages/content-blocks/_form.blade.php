<x-admin.modal name="add-web-section" title="Konten Web">
    <form id="websiteContentForm" enctype="multipart/form-data" x-data="websiteContentForm()"
        @submit.prevent="submitForm">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">add_box</span>
        </x-slot>
       <figure class="border-2 border-primary rounded-xl p-12 flex flex-col items-center justify-center bg-primary/5 transition-colors mb-8">

    <img 
        :src="previewMap[key] 
            ? `/images/content_block/${previewMap[key]}` 
            : '/images/content_block/default.png'"
        @@error="$event.target.src = '/images/content_block/default.png'"
        alt="Preview section"
        class="max-w-full rounded-lg shadow-sm transition-all duration-300"
        :key="key"
    />

            <figcaption class="text-xs text-slate-500 mt-4 text-center leading-relaxed">
                Tampilan contoh section yang akan ditampilkan di beranda.
            </figcaption>

        </figure>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5 col-span-full">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Block Key
                </label>
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="home_about, home_hero, about_company" name="key" type="text" x-model="key"
                    :disabled="mode === 'edit'"
                    :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'" />
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
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    name="block_type" type="text" x-model="block_type" :disabled="mode === 'edit'"
                    :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'" />
                <p x-show="errors.block_type" x-text="errors.block_type" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Locale</label>
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    name="locale" type="text" x-model="locale" :disabled="mode === 'edit'"
                    :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'" />
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
                <label class="relative inline-flex items-center cursor-pointer"
                    :class="mode === 'edit' ? 'cursor-not-allowed opacity-60' : 'cursor-pointer'">
                    <input type="hidden" name="is_active" value="0">
                    <input name="is_active" value="1" x-model="active" class="sr-only peer" type="checkbox"
                        :disabled="mode === 'edit'">
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

                        <input type="text" :name="`items[${index}][field_key]`" x-model="field.field_key"
                            :disabled="mode === 'edit'"
                            :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg"
                            placeholder="judul, deskripsi, image">

                    </div>

                    <div>
                        <label class="text-xs font-bold uppercase text-slate-500">Field Label</label>

                        <input type="text" :name="`items[${index}][field_label]`" x-model="field.field_label"
                            class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg"
                            placeholder="Title / Deskripsi / Gambar" :disabled="mode === 'edit'"
                            :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'">

                    </div>

                    <div>
                        <label class="text-xs font-bold uppercase text-slate-500">Field Type</label>

                        <input
                            class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                            :name="`items[${index}][field_type]`" type="text" x-model="field.field_type"
                            :disabled="mode==='edit'"
                            :class="mode === 'edit' ? 'cursor-not-allowed bg-gray-100' : 'cursor-text'" />

                    </div>

                    <div x-show="mode === 'edit'">

                        <label class="text-xs font-bold uppercase text-slate-500">
                            Field Value
                        </label>

                        <template x-if="field.field_type === 'text'">
                            <input type="text" :name="`items[${index}][field_value]`" x-model="field.field_value"
                                class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg">
                        </template>

                        <template x-if="field.field_type === 'textarea'">
                            <textarea :name="`items[${index}][field_value]`" x-model="field.field_value"
                                class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg">
                            </textarea>
                        </template>

                        <template x-if="field.field_type === 'number'">
                            <input type="number" :name="`items[${index}][field_value]`" x-model="field.field_value"
                                class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg">
                        </template>

                        <template x-if="field.field_type === 'link'">
                            <input type="url" placeholder="https://..." :name="`items[${index}][field_value]`"
                                x-model="field.field_value"
                                class="w-full px-4 py-2 bg-slate-50 border border-primary/10 rounded-lg">
                        </template>

                        <template x-if="field.field_type === 'image'">
                            <div class="space-y-2">

                                <input type="file" accept="image/*" @change="handleImage($event,index)"
                                    class="w-full text-sm">

                                <img x-show="field.field_value" :src="field.field_value" class="w-32 rounded-lg border">

                            </div>
                        </template>

                    </div>

                </div>

            </template>

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
            previewMap: {
                home_hero_section: 'home_hero_section.png',
                home_global_reach_section: 'home_global_reach_section.png',
                home_highlights_section: 'home_highlights_section.png',
                contact_cta_section: 'contact_cta_section.png',

                about_hero_section:'about_hero_section.png',
                about_company_profile_section:'about_company_profile_section.png',
                about_core_values_section:'about_core_values_section.png',

                products_hero_section: 'products_hero_section.png',

                product_detail_features : 'product_detail_features.png',
                product_detail_why_choose : 'product_detail_why_choose.png',

                production_cta_section: 'production_cta_section.png',
                production_hero_section: 'production_hero_section.png',
                production_steps_section: 'production_steps_section.png',
                factory_capacity_section: 'factory_capacity_section.png',
                quality_control_section: 'quality_control_section.png',

                export_hero: 'export_hero.png',
                export_stats: 'export_stats.png',
                export_markets: 'export_markets.png',
                shipping_methods: 'shipping_methods.png',
                lead_times: 'lead_times.png',
                export_cta: 'export_cta.png',
                packaging_standards: 'packaging_standards.png',

                sustainability_hero_section: 'sustainability_hero_section.png',
                sustainability_conscious_sourcing_section:'sustainability_conscious_sourcing_section.png',
                sustainability_circular_production_section:'sustainability_circular_production_section.png',
                sustainability_cta_section:'sustainability_cta_section.png',

                gallery_hero_section:'gallery_hero_section.png',
                gallery_factory_facilities_section:'gallery_factory_facilities_section.png',
                gallery_production_process_section:'gallery_production_process_section.png',
                gallery_packaging_loading_section:'gallery_packaging_loading_section.png',
                gallery_quality_control_section:'gallery_quality_control_section.png',

                contact_information_section: 'contact_information_section.png'






            },
            mode: 'create',
            id: '',
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
                    field_value: '',
                    field_file: ''
                }
            ],
            async submitForm(event) {
                this.errors = {}
                let formData = new FormData()

                if (this.mode === 'create') {
                    formData.append('key', this.key)
                    formData.append('locale', this.locale)
                    formData.append('block_type', this.block_type)
                    formData.append('is_active', this.active ? 1 : 0)

                    this.fields.forEach((field, index) => {
                        formData.append(`items[${index}][field_key]`, field.field_key)
                        formData.append(`items[${index}][field_label]`, field.field_label)
                        formData.append(`items[${index}][field_type]`, field.field_type)
                        formData.append(`items[${index}][field_value]`, field.field_value)
                    })
                }

                if (this.mode === 'edit') {
                    this.fields.forEach((field, index) => {
                        formData.append(`items[${index}][field_key]`, field.field_key)
                        if (field.field_type === 'image' && field.field_file) {

                            formData.append(`items[${index}][field_value]`, field.field_file)

                        } else {

                            formData.append(`items[${index}][field_value]`, field.field_value ?? '')

                        }
                    })

                    formData.append('_method', 'PUT')
                }


                // for (let [key, value] of formData.entries()) {
                //     console.log(key, value)
                // }

                let url = `/cpl-admin/web-content`
                let method = 'POST'

                if (this.mode === 'edit') {
                    url = `/cpl-admin/web-content/${this.id}`
                }

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
                            detail: this.mode === 'edit'
                                ? 'Web Content berhasil diperbarui!'
                                : 'Web Content berhasil dibuat!'
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
            handleImage(event, index) {

                const file = event.target.files[0]

                if (!file) return

                this.fields[index].field_file = file

                const reader = new FileReader()

                reader.onload = e => {
                    this.fields[index].field_value = e.target.result
                }

                reader.readAsDataURL(file)

            },

            async openEdit(id) {
                this.mode = 'edit'

                this.id = id

                const res = await fetch(`/cpl-admin/web-content/${id}`)
                const data = await res.json()

                this.key = data.key
                this.locale = data.locale
                this.block_type = data.block_type
                this.active = data.is_active

                this.fields = data.items.map(item => {

                    if (item.field_type === 'image' && item.field_value) {
                        item.field_value = `/storage/${item.field_value}`
                    }

                    return item
                })

                this.$nextTick(() => {
                    window.dispatchEvent(
                        new CustomEvent('open-modal', { detail: 'add-web-section' })
                    )
                })
            },

            resetForm() {
                this.mode = 'create'

                this.key = ''
                this.active = true
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
                window.addEventListener('edit-web-section', e => {
                    this.openEdit(e.detail)
                })
                this.$watch('block_type', (value) => {
                    if (this.mode === 'edit') return

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