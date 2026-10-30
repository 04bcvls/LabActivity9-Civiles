<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col font-sans">
    <header class="bg-slate-900 border-b border-slate-800 px-6 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <span class="text-emerald-400 font-black text-lg tracking-tight">Barangay Matina Crossing Health Center</span>
            <span class="text-slate-600">|</span>
            <span class="text-xs font-mono text-slate-400">Vaccination Desk</span>
        </div>

        <nav class="flex items-center space-x-4 text-sm font-medium">
            @auth
                <a href="{{ route('dashboard') }}" class="text-slate-300 hover:text-white transition">Dashboard</a>
                <a href="{{ route('schedule') }}" class="text-slate-300 hover:text-white transition">Schedule</a>
                <span class="text-emerald-400 font-bold">Hi, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="bg-rose-600/20 hover:bg-rose-600/40 text-rose-300 border border-rose-500/30 text-xs px-3 py-1.5 rounded-lg transition">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="bg-emerald-600 hover:bg-emerald-500 text-white text-xs px-4 py-2 rounded-lg transition font-bold">Sign in</a>
            @endguest
        </nav>
    </header>

    <main class="flex-1 max-w-6xl w-full mx-auto p-6 md:p-8">
        @yield('content')
    </main>

    <footer class="bg-slate-900 border-t border-slate-800 px-6 py-4 text-center text-xs text-slate-500">
        Bakuna Tracker &copy; 2026 Davao City Health Office. Built by Nurse Christian Civiles.
    </footer>
</body>
</html>