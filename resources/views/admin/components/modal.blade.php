@props([
    'name',
    'title' => 'Modal',
])

<div
    x-data="{ open:false }"
    x-on:open-modal.window="if ($event.detail == '{{ $name }}') open = true"
    x-on:close-modal.window="if ($event.detail == '{{ $name }}') open = false"
    x-show="open"
    x-transition
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
>

<div class="bg-white dark:bg-slate-800 w-full max-w-2xl rounded-2xl shadow-2xl border border-primary/20 overflow-hidden flex flex-col max-h-[90vh]">

{{-- HEADER --}}
<div class="px-6 py-4 border-b border-primary/10 flex items-center justify-between bg-primary/5">

<div class="flex items-center gap-3">

@isset($icon)
<div class="size-8 rounded-lg bg-primary/20 flex items-center justify-center text-primary">
{{ $icon }}
</div>
@endisset

<h3 class="text-lg font-bold text-slate-900 dark:text-white">
{{ $title }}
</h3>

</div>

<button
@click="$dispatch('close-modal','{{ $name }}')"
class="p-1.5 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
>
<span class="material-symbols-outlined">close</span>
</button>

</div>


{{-- BODY --}}
<div class="p-6 overflow-y-auto space-y-6">
{{ $slot }}
</div>


{{-- FOOTER --}}
@isset($footer)
<div class="px-6 py-4 bg-slate-50 dark:bg-slate-900/50 border-t border-primary/10 flex items-center justify-end gap-3">
{{ $footer }}
</div>
@endisset

</div>

</div>