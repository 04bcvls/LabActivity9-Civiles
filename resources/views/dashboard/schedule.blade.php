@extends('layouts.app')

@section('title', $title)

@section('content')
<x-panel title="Full Barangay Vaccination Records">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-slate-950 text-xs font-mono uppercase text-slate-500 border-b border-slate-800">
                <tr>
                    <th class="p-3">Iteration</th>
                    <th class="p-3">Resident Name</th>
                    <th class="p-3">Location</th>
                    <th class="p-3">Vaccine</th>
                    <th class="p-3">Scheduled Date</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($schedules as $schedule)
                    <tr class="{{ $loop->first ? 'bg-emerald-950/20 border-l-2 border-emerald-500' : ($loop->odd ? 'bg-slate-900/50' : 'bg-slate-950') }} border-b border-slate-800/60">
                        <td class="p-3 font-mono text-xs text-slate-500">{{ $loop->iteration }}</td>
                        <td class="p-3 font-bold text-white">{{ $schedule->patient_name }}</td>
                        <td class="p-3">{{ $schedule->purok }}</td>
                        <td class="p-3 text-emerald-400 font-mono">{{ $schedule->vaccine }}</td>
                        <td class="p-3 font-mono text-xs">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="p-3 font-semibold text-xs">{{ $schedule->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-4 text-center text-slate-500">No schedules yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-panel>
@endsection