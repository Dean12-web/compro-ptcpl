<x-admin.modal name="add-testimonial" title="Testimoni Pelanggan">
    <form id="testimonialForm" x-data="testimonialForm()" x-init="init()" @submit.prevent="submitForm">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">record_voice_over</span>
        </x-slot>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Nama
                </label>
                <input name="name" x-model="name"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Nama pelanggan..." type="text" required />
                <p x-show="errors.name" x-text="errors.name" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Perusahaan
                </label>
                <input name="company" x-model="company"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Nama perusahaan..." type="text" />
                <p x-show="errors.company" x-text="errors.company" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Negara
                </label>
                <input name="country" x-model="country"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Indonesia..." type="text" />
                <p x-show="errors.country" x-text="errors.country" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Urutan
                </label>
                <input name="sort_order" x-model.number="sort_order" min="0"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="0" type="number" />
                <p x-show="errors.sort_order" x-text="errors.sort_order" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div class="space-y-1">
                <div class="flex items-center justify-between mb-1">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Testimoni (EN)</p>
                    <span class="text-[10px] text-slate-400">English</span>
                </div>
                <textarea name="message_en" x-model="message_en"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all resize-none"
                    rows="4" placeholder="Testimonial in English..."></textarea>
                <p x-show="errors.message_en" x-text="errors.message_en" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1">
                <div class="flex items-center justify-between mb-1">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Testimoni (ID)</p>
                    <span class="text-[10px] text-slate-400">Bahasa Indonesia</span>
                </div>
                <textarea name="message_id" x-model="message_id"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all resize-none"
                    rows="4" placeholder="Testimoni dalam Bahasa Indonesia..."></textarea>
                <p x-show="errors.message_id" x-text="errors.message_id" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div>

        <div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-primary/10 mt-6">
            <div class="flex flex-col">
                <p class="text-sm font-bold">Status Testimoni</p>
                <p class="text-xs text-slate-500">Tentukan apakah testimoni ini aktif tampil</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-xs font-bold uppercase" :class="is_active ? 'text-slate-400' : 'text-red-500'">
                    Tidak aktif
                </span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="hidden" name="is_active" value="0">
                    <input name="is_active" value="1" x-model="is_active" class="sr-only peer" type="checkbox">
                    <div
                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                    </div>
                </label>
                <span class="text-xs font-bold uppercase text-primary" :class="is_active ? 'text-primary' : 'text-slate-400'">
                    Aktif
                </span>
            </div>
        </div>

    </form>
    <x-slot name="footer">
        <button @click="$dispatch('close-modal','add-testimonial')"
            class="px-5 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-lg">
            Batal
        </button>
        <button type="submit" form="testimonialForm"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
            <span class="material-symbols-outlined !text-lg">save</span>
            Simpan
        </button>
    </x-slot>
</x-admin.modal>
<script>
    function testimonialForm() {
        return {
            mode: 'create',
            testimonialId: null,
            name: '',
            company: '',
            country: '',
            sort_order: 0,
            message_en: '',
            message_id: '',
            is_active: true,
            errors: {},

            init() {
                window.addEventListener('edit-testimonial', event => {
                    this.loadTestimonial(event.detail)
                })

                window.addEventListener('reset-testimonial-form', () => {
                    this.resetForm()
                })

                window.addEventListener('close-modal', event => {
                    if (event.detail === 'add-testimonial') {
                        this.resetForm()
                    }
                })
            },

            resetForm() {
                this.mode = 'create'
                this.testimonialId = null
                this.name = ''
                this.company = ''
                this.country = ''
                this.sort_order = 0
                this.message_en = ''
                this.message_id = ''
                this.is_active = true
                this.errors = {}
            },

            async loadTestimonial(id) {
                if (!id) {
                    return
                }

                try {
                    const res = await fetch(`/cpl-admin/testimonials/${id}`)

                    if (!res.ok) {
                        throw new Error('Gagal memuat testimoni')
                    }

                    const data = await res.json()

                    this.mode = 'edit'
                    this.testimonialId = data.id
                    this.name = data.name ?? ''
                    this.company = data.company ?? ''
                    this.country = data.country ?? ''
                    this.sort_order = data.sort_order ?? 0
                    this.message_en = data.message_en ?? ''
                    this.message_id = data.message_id ?? ''
                    this.is_active = data.is_active

                    window.dispatchEvent(new CustomEvent('open-modal', { detail: 'add-testimonial' }))
                } catch (error) {
                    console.error('Error loading testimonial:', error)
                }
            },

            validate() {
                this.errors = {}

                if (!this.name.trim()) {
                    this.errors.name = 'Nama testimoni dibutuhkan'
                }

                if (!this.message_en.trim()) {
                    this.errors.message_en = 'Testimoni bahasa Inggris dibutuhkan'
                }

                if (!this.message_id.trim()) {
                    this.errors.message_id = 'Testimoni Bahasa Indonesia dibutuhkan'
                }

                if (this.sort_order !== '' && isNaN(Number(this.sort_order))) {
                    this.errors.sort_order = 'Urutan harus berupa angka'
                }

                return Object.keys(this.errors).length === 0
            },

            async submitForm() {
                if (!this.validate()) {
                    return
                }

                const formData = new FormData()
                formData.append('name', this.name.trim())
                formData.append('company', this.company.trim())
                formData.append('country', this.country.trim())
                formData.append('message_en', this.message_en.trim())
                formData.append('message_id', this.message_id.trim())
                formData.append('sort_order', Number(this.sort_order) || 0)
                formData.append('is_active', this.is_active ? 1 : 0)

                let url = '/cpl-admin/testimonials'

                if (this.mode === 'edit') {
                    url = `/cpl-admin/testimonials/${this.testimonialId}`
                    formData.append('_method', 'PUT')
                }

                try {
                    const res = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: formData
                    })

                    const data = await res.json()

                    if (!res.ok) {
                        this.errors = data.errors ?? this.errors
                        throw new Error(data.message ?? 'Gagal menyimpan testimoni')
                    }

                    window.dispatchEvent(new CustomEvent('notify', {
                        detail: data.message
                    }))

                    this.resetForm()

                    window.dispatchEvent(new CustomEvent('close-modal', {
                        detail: 'add-testimonial'
                    }))

                    window.dispatchEvent(new CustomEvent('testimonial-updated'))
                } catch (error) {
                    console.error('Testimonial submit error:', error)
                }
            }
        }
    }
</script>
