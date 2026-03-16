@extends('front.layouts.app')
@section('title', __('seo.contact.title'))
@section('meta_description', __('seo.contact.description'))
@section('meta_keywords',__('seo.contact.keywords'))
@section('og_title', __('seo.contact.title'))
@section('og_description', __('seo.contact.description'))

@section('content')
    <div class="flex-grow">
        <section class="relative h-64 w-full overflow-hidden">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-cover bg-center" data-alt="Modern corporate office building exterior facade"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBAmxaHX-6zw2bCS_OaCw0fT4UI-AvfmPy5XZ2n5-F6yXkOTMBNbKFwlxHJr-jGGpEK7NIg6akhFZBtO8zRD8da79YpNmKM-4ffHLqFiArMKsBtxCbnE2Q3q-yXzj0EnIWagAuc1tjAUOBOek0KTk49E3oNUx2Rp1WBPGw2dgBiChIFgsoEbpPmZ_vNK1OmxZPIeNti-uSbqw3bKHr5WVCnVGe1TObxI9SPffFLywc0fOn78IOV1R54I7hO57NprkR8s9fazWCrS7MX')">
            </div>
            <div class="relative flex h-full items-center justify-center px-6">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-white md:text-5xl"> {{ $contact_hero->items->firstWhere('field_key','title')?->field_value }}</h2>
                    <p class="mt-4 text-lg text-white/90">{{ $contact_hero->items->firstWhere('field_key','description')?->field_value }}</p>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-6 py-16">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">

                <div
                    class="lg:col-span-7 bg-white p-8 rounded-2xl shadow-sm border border-primary/5">
                    <h3 class="text-2xl font-bold mb-6">{{ $contact_form->items->firstWhere('field_key','form_title')?->field_value }}</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-primary/80">{{__('general.full_name')}}</label>
                                <input
                                    class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                    placeholder="John Doe" type="text" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-primary/80">{{__('general.company_name')}}</label>
                                <input
                                    class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                    placeholder="Your Organization" type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-primary/80">{{__('general.country')}}</label>
                                <input
                                    class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                    placeholder="Indonesia" type="text" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-primary/80">{{__('general.email_address')}}</label>
                                <input
                                    class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                    placeholder="john@company.com" type="email" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-primary/80">{{__('general.phone_number')}}</label>
                            <input
                                class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                placeholder="+62 812 3456 7890" type="tel" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-primary/80">{{__('general.inquiry_message')}}</label>
                            <textarea
                                class="rounded-lg border-primary/10 bg-background-light/50 p-3 focus:border-primary focus:ring-primary"
                                placeholder="{{ __('general.placeholder_message') }}" rows="4"></textarea>
                        </div>
                        <button
                            class="w-full rounded-lg bg-[#F98F2A] py-4 text-lg font-bold text-white shadow-lg transition-transform hover:scale-[1.01] active:scale-[0.99]"
                            type="submit">
                            {{ $contact_form->items->firstWhere('field_key','submit_button_text')?->field_value }}
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-5 space-y-8">

                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-4 p-5 rounded-xl bg-primary/5 border border-primary/10">
                            <div class="bg-primary/10 p-3 rounded-lg text-primary">
                                <span class="material-symbols-outlined">location_on</span>
                            </div>
                            <div>
                                <h4 class="font-bold">{{ $contact_information->items->firstWhere('field_key','office_title')?->field_value }}</h4>
                                <p class="text-sm text-slate-600 mt-1">{{ $contact_detail->company_address }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-xl bg-primary/5 border border-primary/10">
                            <div class="bg-primary/10 p-3 rounded-lg text-primary">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <div>
                                <h4 class="font-bold">{{ $contact_information->items->firstWhere('field_key','email_title')?->field_value }}</h4>
                                <p class="text-sm text-slate-600 mt-1">
                                    {{ $contact_detail->company_email }}
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-xl bg-primary/5 border border-primary/10">
                            <div class="bg-primary/10 p-3 rounded-lg text-primary">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <div>
                                <h4 class="font-bold">{{ $contact_information->items->firstWhere('field_key','phone_title')?->field_value }}</h4>
                                <p class="text-sm text-slate-600 mt-1">{{ $contact_detail->company_phone }}<br />
                                    {{ $contact_information->items->firstWhere('field_key','phone_hours')?->field_value }}</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="h-64 rounded-2xl overflow-hidden shadow-inner bg-slate-200 relative group border border-primary/10">
                        <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                            data-alt="Map showing Jakarta city center location" data-location="Sumatera Utara, Indonesia"
                            style="background-image: url('{{ asset('storage/' . $contact_information->items->firstWhere('field_key', 'map_image')?->field_value) }}')">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection