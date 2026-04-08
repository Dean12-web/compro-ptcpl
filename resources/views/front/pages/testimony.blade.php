@extends('front.layouts.app')
@section('title',__('seo.testimonials.title'))
@section('meta_description', __('seo.testimonials.description'))
@section('meta_keywords', __('seo.testimonials.keywords'))
@section('og_title', __('seo.testimonials.title'))
@section('og_description', __('seo.testimonials.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[614px] flex items-center px-8 md:px-16 lg:px-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Industrial manufacturing facility" class="w-full h-full object-cover opacity-10 mix-blend-overlay"
                data-alt="Blurred background of a modern industrial warehouse with warm lighting and geometric shelving structures for a professional corporate feel"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLK846AfCIUAFbboDzT71-hibSrCVGQE_AIiaN7Ff8c8cNZYdc5F_ZaNJndoCaramfE_DPLMX1lVH-CGNaed47qDlFn-2Gmcji8r3UY9yDQBxS9i8u4tRBnkxgCxp_myIA87DlCa1RNSUNYJwNh9JevImdnzpZOu3IBneDV7E6_C_nH6nHg10LVFELXHYcd9Tz29H8aVAyLVHTlklGjcMqqsM7UqsOZGr2n3mNZxwxuo9NpmpLl0O3WHAhOdUWD0zJulg95DpUO-DB" />
            <div class="absolute inset-0 bg-gradient-to-r from-background via-background/95 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <span
                class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant text-xs font-bold tracking-widest uppercase mb-6 rounded-sm">{{ $testimony_hero->items->where('field_key', 'badge')->first()->field_value ?? '' }}</span>
            <h1 class="text-5xl md:text-7xl font-black font-headline text-primary leading-none tracking-tighter mb-8">
                {{ $testimony_hero->items->where('field_key', 'title')->first()->field_value ?? '' }}
            </h1>
            <p class="text-lg md:text-xl text-on-surface-variant max-w-2xl leading-relaxed font-light">
                {{ $testimony_hero->items->where('field_key', 'description')->first()->field_value ?? '' }}
            </p>
        </div>
    </section>
    <!-- Testimonials Grid Section -->
    <section class="px-8 md:px-16 lg:px-24 py-24 bg-surface-container-low">
        <div class="mb-16 editorial-grid gap-8">
            <div class="col-span-12 md:col-span-6">
                <h2 class="text-3xl font-bold font-headline text-primary mb-4">
                    {{ $testimony_content->items->where('field_key', 'title')->first()->field_value ?? '' }}
                </h2>
                <p class="text-on-surface-variant">
                    {{ $testimony_content->items->where('field_key', 'subtitle')->first()->field_value ?? '' }}
                </p>
            </div>
        </div>

        @if ($testimonials->isEmpty())
            <div
                class="px-6 py-10 rounded-2xl border border-on-surface-variant/30 flex items-center justify-center text-on-surface-variant">
                <p>We are still gathering stories from our partners. Check back soon.</p>
            </div>
        @else
            @php
                $slides = $testimonials->chunk(6)->values();
                $slideCount = $slides->count();
            @endphp
            <div x-data="testimonial()" x-init="startAutoplay()" @mouseenter="pauseAutoplay()" @mouseleave="resumeAutoplay()"
                class="relative">
                <div class="overflow-hidden">
                    <div class="flex transition-all duration-500 ease-in-out"
                        :style="`transform: translateX(-${active * 100}%);`" style="width: {{ $slideCount * 100 }}%;">
                        @foreach ($slides as $slideIndex => $slide)
                            <div class="w-full flex-shrink-0 px-2" :aria-hidden="active !== {{ $slideIndex }}">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                    @foreach ($slide as $testimonial)
                                        <article
                                            class="bg-surface-container-lowest p-8 ghost-border flex flex-col justify-between group hover:bg-white transition-all duration-300">
                                            <div>
                                                <div class="mb-6">
                                                    <span class="material-symbols-outlined text-tertiary text-4xl"
                                                        style="font-variation-settings: 'FILL' 1;">format_quote</span>
                                                </div>
                                                <blockquote class="text-xl font-light text-on-surface leading-relaxed mb-8 italic">
                                                    {{ $testimonial['message'] }}
                                                </blockquote>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="w-12 h-12 bg-surface-container-high rounded-full overflow-hidden flex-shrink-0 flex items-center justify-center text-sm font-bold text-primary">
                                                    {{ $testimonial['initials'] }}
                                                </div>
                                                <div>
                                                    <p class="font-bold text-primary text-sm">{{ $testimonial['name'] }}</p>
                                                    <p class="text-xs text-on-surface-variant uppercase tracking-wider">
                                                        {{ $testimonial['company'] }} · {{ $testimonial['country'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="absolute inset-y-0 left-0 flex items-center px-2">
                    <button type="button"
                        class="pointer-events-auto rounded-full bg-surface-container-high/70 hover:bg-surface-container-high/90 text-primary shadow-lg w-10 h-10 flex items-center justify-center transition"
                        @click="prev()" :disabled="slidesCount <= 1" aria-label="Show previous testimonials">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <button type="button"
                        class="pointer-events-auto rounded-full bg-surface-container-high/70 hover:bg-surface-container-high/90 text-primary shadow-lg w-10 h-10 flex items-center justify-center transition"
                        @click="next()" :disabled="slidesCount <= 1" aria-label="Show next testimonials">
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </button>
                </div>
                @if ($slideCount > 1)
                    <div class="flex justify-center gap-2 mt-10">
                        @for ($i = 0; $i < $slideCount; $i++)
                            <button type="button" class="w-3 h-3 rounded-full transition"
                                :class="active === {{ $i }} ? 'bg-primary' : 'bg-primary/30'" @click="active = {{ $i }}"
                                aria-label="Show slide {{ $i + 1 }}"></button>
                        @endfor
                    </div>
                @endif
            </div>
        @endif
    </section>
    <!-- CTA Section -->
    <section class="px-8 md:px-16 lg:px-24 py-32 bg-primary/5 relative overflow-hidden">
        <div class="absolute right-0 top-0 w-1/3 h-full bg-primary opacity-50 skew-x-12 translate-x-1/2">
        </div>
        <div class="relative z-10 max-w-3xl">
            <h2 class="text-4xl md:text-5xl font-black font-headline text-on-primary mb-8 leading-tight">
                {{ $testimony_cta->items->where('field_key', 'title')->first()->field_value ?? '' }}
            </h2>
            <p class="text-primary-fixed text-lg mb-10 max-w-xl font-light">
                {{ $testimony_cta->items->where('field_key', 'subtitle')->first()->field_value ?? '' }}
            </p>
            <div class="flex flex-wrap gap-4">
                <a class="inline-flex items-center gap-2 bg-accent text-white px-8 py-4 rounded font-bold font-headline transition-all hover:bg-primary-fixed"
                    href="#">
                    {{  __('general.testimony_cta')}}
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>
@endsection
<script>
    function testimonial() {
        return {

            active: 0,
            interval: null,
            slidesCount: {{ $slideCount }},
            next() {
                if (this.slidesCount <= 1) return;
                this.active = (this.active + 1) % this.slidesCount;
            },
            prev() {
                if (this.slidesCount <= 1) return;
                this.active = (this.active - 1 + this.slidesCount) % this.slidesCount;
            },
            stopAutoplay() {
                if (this.interval) {
                    clearInterval(this.interval);
                    this.interval = null;
                }
            },
            startAutoplay() {
                if (this.slidesCount <= 1) return;
                this.stopAutoplay();
                this.interval = setInterval(() => this.next(), 6000);
            },
            pauseAutoplay() {
                this.stopAutoplay();
            },
            resumeAutoplay() {
                if (!this.interval) {
                    this.startAutoplay();
                }
            }

        }
    }
</script>