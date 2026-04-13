<x-admin.modal name="add-product" title="Product">
    <form id="productForm" enctype="multipart/form-data" x-data="productForm()" @submit.prevent="submitForm"
        @reset-product-form.window="resetForm()" @close-modal.window="resetForm()">
        @csrf
        <x-slot name="icon">
            <span class="material-symbols-outlined">add_box</span>
        </x-slot>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5 col-span-full">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                    Nama Produk
                </label>

                <input
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="Standard Egg Tray 30s" name="name" type="text" x-model="name" required />
                <p x-show="errors.name" x-text="errors.name" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Material -->
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Material</label>
                <select name="material" x-model="material"
                    class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all">
                    <option>Pilih Material</option>
                    <option value="paper-pulp">Pulp Kertas</option>
                    <option value="plastic-egg-tray">Rak Telur Plastik</option>
                    <option value="styrofoam-tray">Rak Telur Styrofoam</option>
                    <option value="natural-fiber">Serat Alami</option>
                </select>
                <p x-show="errors.material" x-text="errors.material" class="text-xs text-red-500 mt-1"></p>
            </div>
            <!-- Capacity -->
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Kapasitas</label>
                <div class="relative">
                    <input name="capacity" x-model="capacity"
                        class="w-full pl-4 pr-12 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                        placeholder="30" type="number" />
                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-xs font-bold text-slate-400">Telur</span>
                </div>
                <p x-show="errors.capacity" x-text="errors.capacity" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div><br>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Dimensi (Tinggi, Panjang, Lebar)</label>
                <input name="dimensions" x-model="dimensions"
                    class="w-full pl-4 pr-12 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                    placeholder="300 x 300 mm" type="text" />
                <p x-show="errors.dimensions" x-text="errors.dimensions" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div class="space-y-1.5">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Ukuran telur</label>
                <div class="relative">
                    <input name="weight" x-model="weight"
                        class="w-full pl-4 pr-12 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                        placeholder="80 g" type="text" />
                    <p x-show="errors.weight" x-text="errors.weight" class="text-xs text-red-500 mt-1"></p>
                </div>
            </div>
        </div><br>
        <!-- Description -->
        <div class="space-y-1.5">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Deskripsi</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">EN</p>
                        <span class="text-[10px] text-slate-400">English</span>
                    </div>
                    <textarea name="description_en" x-model="description_en"
                        class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all resize-none"
                        placeholder="Product description in English..." rows="3"></textarea>
                    <p x-show="errors.description_en" x-text="errors.description_en" class="text-xs text-red-500 mt-1"></p>
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">ID</p>
                        <span class="text-[10px] text-slate-400">Bahasa Indonesia</span>
                    </div>
                    <textarea name="description_id" x-model="description_id"
                        class="w-full px-4 py-2 bg-slate-50 dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all resize-none"
                        placeholder="Deskripsi produk dalam Bahasa Indonesia..." rows="3"></textarea>
                    <p x-show="errors.description_id" x-text="errors.description_id" class="text-xs text-red-500 mt-1"></p>
                </div>
            </div>
        </div><br>
        <!-- Image Upload -->
        <div class="space-y-1.5">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">
                Gambar Produk
            </label>
            <div class="space-y-4">
                <input type="file" name="images[]" multiple accept="image/png,image/jpeg,image/jpg" class="hidden"
                    x-ref="fileinput" @change="handleFiles($event)">
                <div @click="files.length < maxImages && $refs.fileinput.click()" @dragover.prevent
                    @drop.prevent="files.length < maxImages && handleDrop($event)" :class="files.length >= maxImages 
        ? 'opacity-40 cursor-not-allowed border-slate-200 bg-slate-100'
        : 'cursor-pointer hover:bg-primary/10'"
                    class="border-2 border-dashed border-primary/20 rounded-xl p-12 flex flex-col items-center justify-center bg-primary/5 transition-colors">

                    <span class="material-symbols-outlined text-3xl text-primary">
                        add_photo_alternate
                    </span>

                    <p class="text-xs text-slate-400">
                        Maksimum <span x-text="maxImages"></span> Gambar
                    </p>

                </div>
                <!-- Image Grid Preview -->
                <div class="grid grid-cols-4 gap-3" x-show="previews.length">
                    <template x-for="(image, index) in previews" :key="index">

                        <div class="relative aspect-square rounded-lg border border-primary/10 overflow-hidden group">

                            <img :src="image.url ?? image" class="w-full h-full object-cover">

                            <button type="button" @click="image.id ? deleteImage(image.id,index) : removeImage(index)"
                                class=" absolute top-1 right-1 size-5 bg-red-500 text-white rounded-full flex
                                items-center justify-center opacity-0 group-hover:opacity-100">
                                <span class="material-symbols-outlined !text-[14px]">close</span>
                            </button>

                        </div>

                    </template>
                    <!-- Placeholder / Add More -->
                    <div @click="files.length < maxImages && $refs.fileinput.click()" @dragover.prevent
                        @drop.prevent="files.length < maxImages && handleDrop($event)" :class="files.length >= maxImages 
        ? 'opacity-40 cursor-not-allowed border-slate-200 bg-slate-100'
        : 'cursor-pointer hover:bg-primary/10'"
                        class="aspect-square rounded-lg border border-dashed border-primary/20 bg-slate-50 dark:bg-slate-900/50 flex flex-col items-center justify-center text-slate-400 hover:text-primary hover:border-primary/40 transition-colors cursor-pointer">
                        <span class="material-symbols-outlined">add</span>
                        <span class="text-[10px] font-bold uppercase mt-1">Add</span>
                    </div>
                </div>
            </div>
            <div x-show="imageErrors.length" class="space-y-1">
                <template x-for="error in imageErrors">
                    <p class="text-xs text-red-500" x-text="error"></p>
                </template>
            </div>
        </div>
        <br>
        <!-- Status Toggle -->
        <div
            class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-primary/10">
            <div class="flex flex-col">
                <p class="text-sm font-bold">Status produk</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-xs font-bold uppercase" :class="active ? 'text-slate-400' : 'text-red-500'">
                    Tidak Aktif
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
        <button @click="$dispatch('reset-product-form'); $dispatch('close-modal','add-product')"
            class="px-5 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-lg">
            Batal
        </button>

        <button type="submit" form="productForm"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
            <span class="material-symbols-outlined !text-lg">save</span>
            Simpan
        </button>

    </x-slot>
</x-admin.modal>
<script>
    function productForm() {

        return {

            mode: 'create',
            product_id: null,

            active: true,

            name: '',
            capacity: '',
            dimensions: '',
            weight: '',
            description_en: '',
            description_id: '',
            material: '',

            files: [],
            previews: [],
            existingImages: [],

            errors: {},
            imageErrors: [],

            maxImages: 4,
            maxSize: 2 * 1024 * 1024,

            init() {

                window.addEventListener('edit-product', e => {
                    this.openEdit(e.detail)
                })

            },


            resetForm() {

                this.mode = 'create'
                this.product_id = null

                this.name = ''
                this.capacity = ''
                this.dimensions = ''
                this.weight = ''
                this.description_en = ''
                this.description_id = ''
                this.material = ''

                this.active = true

                this.files = []
                this.previews = []
                this.existingImages = []

                this.errors = {}
                this.imageErrors = []

                if (this.$refs.fileinput) {
                    this.$refs.fileinput.value = ''
                }

            },

            async openEdit(id) {

                const res = await fetch(`/cpl-admin/products-data/${id}`)
                const data = await res.json()

                this.mode = 'edit'
                this.product_id = data.id

                this.name = data.name
                this.capacity = data.capacity
                this.dimensions = data.dimensions
                this.weight = data.weight
                this.description_en = data.description_en ?? ''
                this.description_id = data.description_id ?? ''
                this.material = data.material
                this.active = data.is_active

                this.existingImages = data.images
                this.previews = data.images.map(img => ({
                    id: img.id,
                    url: img.url,
                    new: false
                }))

                window.dispatchEvent(
                    new CustomEvent('open-modal', { detail: 'add-product' })
                )

            },

            async deleteImage(id, index) {

                if (!confirm('Delete image?')) return

                await fetch(`/cpl-admin/products-image/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]').content
                    }
                })

                this.previews.splice(index, 1)

            },

            validate() {

                this.errors = {}
                this.imageErrors = []

                if (!this.name.trim()) {
                    this.errors.name = 'Nama Produk dibutuhkan'
                }

                if (!this.capacity || this.capacity <= 0) {
                    this.errors.capacity = 'Kapasitas harus lebih besar dari 0'
                }

                if (!this.weight) {
                    this.errors.weight = 'Berat tidak boleh kosong'
                }

                if (!this.dimensions) {
                    this.errors.dimensions = 'Dimensi tidak boleh kosong'
                }

                if (!this.description_en.trim()) {
                    this.errors.description_en = 'English description tidak boleh kosong'
                }

                if (!this.description_id.trim()) {
                    this.errors.description_id = 'Deskripsi Bahasa Indonesia tidak boleh kosong'
                }

                if (!this.material) {
                    this.errors.material = 'Material tidak boleh kosong'
                }

                if (this.mode === 'create' && this.files.length === 0) {
                    this.imageErrors.push('Gambar tidak boleh kosong')
                }

                return Object.keys(this.errors).length === 0 && this.imageErrors.length === 0

            },

            async submitForm(event) {

                if (!this.validate()) {
                    return
                }

                let formData = new FormData()

                formData.append('name', this.name)
                formData.append('capacity', this.capacity)
                formData.append('dimensions', this.dimensions)
                formData.append('weight', this.weight)
                formData.append('description_en', this.description_en)
                formData.append('description_id', this.description_id)
                formData.append('material', this.material)
                formData.append('is_active', this.active ? 1 : 0)

                this.files.forEach(file => {
                    formData.append('images[]', file)
                })

                let url = '/cpl-admin/products'
                let method = 'POST'

                if (this.mode === 'edit') {
                    url = `/cpl-admin/products-data/${this.product_id}`
                    formData.append('_method', 'PUT')
                }

                const res = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })

                const data = await res.json()

                if (data.success) {

                    this.resetForm()

                    window.dispatchEvent(
                        new CustomEvent('close-modal', { detail: 'add-product' })
                    )

                    //send reload page
                    window.dispatchEvent(
                        new CustomEvent('product-updated')
                    )

                }

            },

            handleFiles(event) {
                this.addFiles(event.target.files)
            },

            handleDrop(event) {
                this.addFiles(event.dataTransfer.files)
            },

            addFiles(fileList) {

                this.imageErrors = []

                for (let file of fileList) {

                    const totalImages = this.files.length + this.existingImages.length

                    if (totalImages >= this.maxImages) {

                        this.imageErrors.push("Maximum " + this.maxImages + " images allowed")
                        break

                    }

                    if (!file.type.startsWith('image/')) {
                        this.imageErrors.push(file.name + " is not an image")
                        continue
                    }

                    if (file.size > this.maxSize) {
                        this.imageErrors.push(file.name + " exceeds 2MB limit")
                        continue
                    }

                    this.files.push(file)

                    this.previews.push({
                        url: URL.createObjectURL(file),
                        new: true
                    })

                }

                this.syncInput()

            },

            removeImage(index) {

                const image = this.previews[index]

                if (image.new) {

                    this.files.splice(index, 1)

                } else {

                    this.deleteImage(image.id, index)

                    return

                }

                this.previews.splice(index, 1)

                this.syncInput()

            },

            syncInput() {

                const dataTransfer = new DataTransfer()

                this.files.forEach(file => {
                    dataTransfer.items.add(file)
                })

                this.$refs.fileinput.files = dataTransfer.files

            }

        }

    }
</script>
