<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\Testimonial;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class TestimonyController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $testimony_hero = ContentBlock::where('key', 'testimony_hero')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        $testimony_content = ContentBlock::where('key', 'testimony_content')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        $testimony_cta = ContentBlock::where('key', 'testimony_cta')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->map(function (Testimonial $testimonial) use ($locale) {
                $message = $testimonial->message[$locale] ?? $testimonial->message['en'] ?? '';
                if (empty($message) && is_array($testimonial->message)) {
                    $message = Arr::first($testimonial->message) ?? '';
                }
                $initials = Str::of(preg_replace('/\s+/', ' ', trim($testimonial->name)))
                    ->explode(' ')
                    ->filter()
                    ->map(fn($word) => Str::substr($word, 0, 1))
                    ->take(2)
                    ->implode('');
                if (empty($initials)) {
                    $initials = Str::substr($testimonial->name, 0, 2);
                }
                return [
                    'id' => $testimonial->id,
                    'name' => $testimonial->name,
                    'company' => $testimonial->company,
                    'country' => $testimonial->country,
                    'message' => $message,
                    'initials' => Str::upper($initials),
                ];
            });

        return view('front.pages.testimony', compact('testimonials','testimony_hero','testimony_content','testimony_cta'));
    }
}
