@props(['title', 'value'])

<div class="bg-slate-900 border border-slate-800 rounded-xl p-5 shadow-sm hover:border-emerald-500/40 transition">
    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">{{ $title }}</p>
    <p class="text-3xl font-black text-white mt-2">{{ $value }}</p>
</div>