@extends('layouts.app')

@section('title', 'Sign In - Bakuna Tracker')

@section('content')
<div class="max-w-md mx-auto mt-12">
    <x-panel title="Health Worker Authentication">
        <form method="POST" action="/login" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-mono text-slate-400 mb-1">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 text-sm focus:border-emerald-500 focus:outline-none">
                @error('email') <p class="text-rose-400 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-mono text-slate-400 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 text-sm focus:border-emerald-500 focus:outline-none">
                @error('password') <p class="text-rose-400 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <button class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm rounded-lg p-2.5 transition">
                Sign In
            </button>
        </form>
    </x-panel>
</div>
@endsection