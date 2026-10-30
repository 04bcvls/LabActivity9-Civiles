@props(['title'])

<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-xl mb-6">
    <div class="bg-slate-950 border-b border-slate-800 px-6 py-4 flex items-center justify-between">
        <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-400 font-mono">{{ $title }}</h3>
    </div>
    <div class="p-6">
        {{ $slot }}
    </div>
</div>