<x-admin.modal name="add-export-country" title="Negara Ekspor">
    <form id="exportCountryForm" enctype="multipart/form-data" x-data="exportCountryForm()"
        @submit.prevent="submitForm">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">add_box</span>
        </x-slot>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5 col-span-full">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Nama Negara
                </label>
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Indonesia..." name="name" type="text" x-model="name" required />
                <p x-show="errors.name" x-text="errors.name" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Material -->
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Wilayah</label>
                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Asia" name="region" type="text" x-model="region" required />
                <p x-show="errors.region" x-text="errors.region" class="text-xs text-red-500 mt-1"></p>
            </div>
            <!-- Capacity -->
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Kode ISO</label>
                <div class="relative">
                    <input name="iso_code" x-model="iso_code"
                        class="w-full pl-4 pr-12 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                        placeholder="ID" type="text" />
                </div>
                <p x-show="errors.iso_code" x-text="errors.iso_code" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div
            class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-primary/10">
            <div class="flex flex-col">
                <p class="text-sm font-bold">Negara Ekspor Status</p>
                <p class="text-xs text-slate-500">Tetapkan apakah negara ekspor tersebut tersedia</p>
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
    </form>
    <x-slot name="footer">
        <button @click="$dispatch('close-modal','add-export-country')"
            class="px-5 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-lg">
            Batal
        </button>

        <button type="submit" form="exportCountryForm"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
            <span class="material-symbols-outlined !text-lg">save</span>
            Simpan
        </button>

    </x-slot>
</x-admin.modal>
<script>
    function exportCountryForm() {
        return {
            mode: 'create',

            active: true,
            name: '',
            region: '',
            iso_code: '',

            errors: {},

            resetForm() {
                this.mode = 'create'
                this.active = true

                this.name = ''
                this.region = ''
                this.iso_code = ''
            },

            validate() {
                this.errors = {}

                if (!this.name) {
                    this.errors.name = 'Silahkan tentukan nama terlebih dahulu'
                }
                if (!this.region) {
                    this.errors.region = 'Silahkan tentukan wilayah terlebih dahulu'
                }
                if (!this.iso_code) {
                    this.errors.iso_code = 'Silahkan tentukan kode iso terlebih dahulu'
                }

                return Object.keys(this.errors).length === 0
            },

            async submitForm(event) {
                if (!this.validate()) {
                    return
                }

                const formData = new FormData()

                formData.append('name', this.name)
                formData.append('region', this.region)
                formData.append('iso_code', this.iso_code)
                formData.append('is_active', this.active ? 1 : 0)


                for (let [key, value] of formData.entries()) {
                    console.log(key, value)
                }

                let url =   `/cpl-admin/export-country-store`
                let method = 'POST'

                const res = await fetch(url, {
                    method:method,
                    headers:{
                        'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content
                    },
                    body:formData
                })

                const data = await res.json()

                if(data.success){
                    window.dispatchEvent(
                        new CustomEvent('notify',{
                            detail: 'Negara Ekspor Berhasil dibuat!'
                        })
                    )

                    this.resetForm()

                    window.dispatchEvent(
                        new CustomEvent('close-modal',{
                            detail:'add-export-country'
                        })
                    )
                }

            }
        }
    }


</script>