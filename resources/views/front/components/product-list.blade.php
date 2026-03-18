<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

    @foreach ($products as $product)
        @php
            $image = $product->primaryImage?->image_path;
            $fallback = 'https://lh3.googleusercontent.com/aida-public/xxx';
        @endphp

        <div
            class="group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
            <!-- IMAGE -->
            <div class="relative aspect-square overflow-hidden bg-slate-100">
                <div class="w-full h-full bg-center bg-cover transform group-hover:scale-110 transition"
                    style="background-image: url('{{ $image ? asset('storage/' . $image) : $fallback }}');">
                </div>
            </div>
            
            <!-- CONTENT -->
            <div class="p-5 flex flex-col flex-1">
                <div class="mb-4">
                    <h3 class="text-slate-900 text-lg font-bold mb-1">
                        {{ $product->name }}
                    </h3>

                    <div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">inventory_2</span>
                            {{ $product->material ? __("general.{$product->material}") : '' }}
                        </span>

                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>

                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">grid_view</span>
                            {{ $product->capacity }} {{__('general.eggs') }}
                        </span>
                    </div>
                </div>

                <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                    {{ $product->description }}
                </p>

                <div class="mt-auto">
                    <button
                        class="w-full bg-slate-100 text-slate-900 font-bold text-sm py-3 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors flex items-center justify-center gap-2">
                        {{ __('general.view_details') }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </button>
                </div>
            </div>

        </div>
    @endforeach
</div>
    <div class="mt-16 flex items-center justify-center gap-2">

        {{-- PREV --}}
        @if ($products->onFirstPage())
            <button
                class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
        @else
            <a href="#" data-page="{{ $products->currentPage() - 1 }}"
                class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
            </a>
        @endif

        {{-- NUMBERS --}}
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <a href="#" data-page="{{ $i }}"
                class="size-9 flex items-center justify-center rounded border border-primary/10 bg-primary text-white font-bold text-sm">
                {{ $i }}
            </a>
        @endfor

        {{-- NEXT --}}
        @if ($products->hasMorePages())
            <a href="#" data-page="{{ $products->currentPage() + 1 }}"
                class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </a>
        @else
            <span class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </span>
        @endif

    </div>
