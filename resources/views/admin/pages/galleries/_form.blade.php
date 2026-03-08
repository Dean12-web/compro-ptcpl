<x-admin.modal name="add-gallery" title="Galeri">
    <form id="galleryForm" enctype="multipart/form-data" x-data="galleryForm()" @submit.prevent="submitForm">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">add_box</span>
        </x-slot>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5 col-span-full">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Kategori
                </label>
                <select name="category" x-model="category"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all">
                    <option>Pilih Kategori</option>
                    <option value="factory">Pabrik</option>
                    <option value="production">Produksi</option>
                    <option value="quality-control">Kontrol Kualitas</option>
                    <option value="packaging">Kemasan</option>
                </select>
                <p x-show="errors.category" x-text="errors.category" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div class="space-y-1.5">
            <label class="text-xs font-bold uppercase trackig-wider text-slate-500">
                Gambar
            </label>
            <div
                class="flex flex-col items-center gap-4 rounded-xl border-2 border-dashed border-primary/30 bg-primary/5 px-6 py-10 transition-all hover:bg-primary/10 group cursor-pointer">
                <div class="flex flex-col items-center gap-1">
                    <p class="text-slate-500 text-sm font-normal text-center">Support for High-Res JPEG,
                        PNG (Max 2MB per file)</p>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="h-px w-12 bg-primary/20"></div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">or</span>
                    <div class="h-px w-12 bg-primary/20"></div>
                </div>
                <input type="file" class="hidden" x-ref="fileInput" @change="handleFile" accept="image/*">
                <button type="button" @click="$refs.fileInput.click()"
                    class="px-6 py-2 bg-white dark:bg-slate-800 border border-primary/20 rounded-lg text-primary font-bold text-sm hover:shadow-md transition-all">
                    Browse Local Storage
                </button>
                <div x-show="imageErrors" class="space-y-1">
                    <p class="text-xs text-red-500" x-text="imageErrors"></p>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-3" x-show="preview">
                <div class="relative aspect-square rounded-lg border border-primary/10 overflow-hidden group">
                    <img :src="preview" class="w-full h-full object-cover">

                    <button type="button" @click="removeImage" class=" absolute top-1 right-1 size-5 bg-red-500 text-white rounded-full flex
                                items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="material-symbols-outlined !text-[14px]">close</span>
                    </button>
                </div>
            </div>
        </div><br>
        <div
            class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-primary/10">
            <div class="flex flex-col">
                <p class="text-sm font-bold">Galeri Status</p>
                <p class="text-xs text-slate-500">Tetapkan apakah produk tersebut tersedia</p>
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
        <button @click="$dispatch('close-modal','add-gallery')"
            class="px-5 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-lg">
            Batal
        </button>

        <button type="submit" form="galleryForm"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
            <span class="material-symbols-outlined !text-lg">save</span>
            Simpan
        </button>

    </x-slot>
</x-admin.modal>
<script>
    function galleryForm() {
        return {
            mode: 'create',

            active: true,
            category: '',

            preview: null,
            file: null,

            errors: {},
            imageErrors: '',

            maxSize: 2 * 1024 * 1024,

            handleFile(event) {
                const selectedFile = event.target.files[0]

                if (!selectedFile) return

                if (selectedFile.size > this.maxSize) {
                    this.imageErrors = 'Ukuran gambar maksimal 2MB'
                    return
                }

                this.file = selectedFile
                this.preview = URL.createObjectURL(selectedFile)
            },

            removeImage() {
                this.preview = null
                this.file = null
            },

            resetForm() {
                this.mode = 'create'
                this.category = ''
                this.active = true

                this.file = null
                this.preview = null

                if (this.$refs.fileinput) {
                    this.$refs.fileinput.value = ''
                }
            },

            validate() {
                this.errors = {}
                this.imageErrors = ''

                if (!this.category) {
                    this.errors.category = 'Silahkan pilih kategori terlebih dahulu'
                }

                if (this.mode === 'create' && !this.file) {
                    this.imageErrors = 'Gambar tidak boleh kosong'
                }

                return Object.keys(this.errors).length === 0 && !this.imageErrors
            },

            async submitForm(event) {
                if (!this.validate()) {
                    return
                }

                const formData = new FormData()

                formData.append('category', this.category)
                formData.append('is_active', this.active ? 1 : 0)

                if (this.file) {
                    formData.append('image', this.file)
                }

                let url = '/cpl-admin/gallery-store'
                let method = 'POST'

                const res = await fetch(url, {
                    method: method,
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })

                const data = await res.json()

                if (data.success) {

                    window.dispatchEvent(
                        new CustomEvent('notify', {
                            detail: 'Galeri berhasil diupload!'
                        })
                    )

                    this.resetForm()

                    window.dispatchEvent(
                        new CustomEvent('close-modal', { detail: 'add-gallery' })
                    )
                }


            }
        }
    }


</script>