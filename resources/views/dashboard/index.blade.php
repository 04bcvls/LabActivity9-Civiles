@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="space-y-6">
    <h1 class="text-2xl md:text-3xl font-black text-white tracking-tight">{{ $title }}</h1>

    {{-- Requirement 5: @if / @elseif / @else Alert Banner --}}
    @if ($alerts->count() > 0)
        <div class="bg-rose-500/10 border border-rose-500/30 rounded-xl p-4 text-rose-300 text-sm flex items-center justify-between">
            <span><strong>Attention:</strong> There are {{ $alerts->count() }} overdue vaccination appointments requiring follow-up.</span>
        </div>
    @elseif ($schedules->count() === 0)
        <div class="bg-amber-500/10 border border-amber-500/30 rounded-xl p-4 text-amber-300 text-sm">
            Vaccine inventory depleted. No schedules recorded.
        </div>
    @else
        <div class="bg-emerald-500/10 border border-emerald-500/30 rounded-xl p-4 text-emerald-300 text-sm">
            All clear! All schedules up to date.
        </div>
    @endif

    {{-- Requirement 8 & 9: Stat Card Component Grid --}}
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">
        @foreach ($stats as $stat)
            <x-stat-card :title="$stat['label']" :value="$stat['value']" />
        @endforeach
    </div>

    {{-- Requirement 8: Slotted Panel Component --}}
    <x-panel title="Recent Vaccination Schedule">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950 text-xs font-mono uppercase text-slate-500 border-b border-slate-800">
                    <tr>
                        <th class="p-3">#</th>
                        <th class="p-3">Patient</th>
                        <th class="p-3">Purok</th>
                        <th class="p-3">Vaccine</th>
                        <th class="p-3">Dose</th>
                        <th class="p-3">Date</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Requirement 6: @forelse with $loop --}}
                    @forelse ($schedules as $schedule)
                        <tr class="{{ $loop->odd ? 'bg-slate-900/50' : 'bg-slate-950' }} border-b border-slate-800/60">
                            <td class="p-3 font-mono text-xs text-slate-500">{{ $loop->iteration }}</td>
                            <td class="p-3 font-bold text-white">{{ $schedule->patient_name }}</td>
                            <td class="p-3">{{ $schedule->purok }}</td>
                            <td class="p-3 text-emerald-400 font-mono">{{ $schedule->vaccine }}</td>
                            <td class="p-3">{{ $schedule->dose }}</td>
                            <td class="p-3 font-mono text-xs">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                            <td class="p-3">
                                {{-- Requirement 5: @unless usage --}}
                                @unless ($schedule->status === 'Done')
                                    <span class="px-2 py-0.5 text-xs font-bold rounded-md {{ $schedule->status === 'Overdue' ? 'bg-rose-500/20 text-rose-400 border border-rose-500/30' : 'bg-amber-500/20 text-amber-400 border border-amber-500/30' }}">
                                        {{ $schedule->status }}
                                    </span>
                                @else
                                    <span class="px-2 py-0.5 text-xs font-bold rounded-md bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                        Done
                                    </span>
                                @endunless
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-4 text-center text-slate-500">No schedules yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>
</div>
@endsection