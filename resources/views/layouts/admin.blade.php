<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ASMAN - Admin Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #f8fafc;
        }
        .sidebar-shell {
            background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
        }
        .nav-title {
            font-size: 0.68rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #94a3b8;
            font-weight: 700;
            margin-bottom: 0.45rem;
            padding-left: 0.35rem;
        }
        .sidebar-link {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-radius: 0.85rem;
            padding: 0.6rem 0.7rem;
            color: #475569;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }
        .sidebar-link .icon-wrap {
            width: 1.9rem;
            height: 1.9rem;
            border-radius: 0.65rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            color: #64748b;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }
        .sidebar-link:hover {
            background: #f8fafc;
            border-color: #e2e8f0;
            transform: translateX(2px);
        }
        .sidebar-link:hover .icon-wrap {
            background: #e2e8f0;
            color: #334155;
        }
        .sidebar-link.active {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: #ffffff;
            border-color: transparent;
            box-shadow: 0 14px 24px -18px rgba(37, 99, 235, 0.95);
        }
        .sidebar-link.active .icon-wrap {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }
        .sidebar-link.active::before {
            content: '';
            position: absolute;
            left: -0.7rem;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 1.2rem;
            border-radius: 9999px;
            background: #1d4ed8;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-72 border-r border-slate-200 flex flex-col sidebar-shell">
            <div class="p-6 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold shadow-sm">AS</div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-800 leading-tight">ASMAN</h1>
                        <p class="text-xs text-slate-500 font-medium">Academic System Management</p>
                    </div>
                </div>
                <div class="mt-4 rounded-xl border border-blue-100 bg-blue-50 px-3 py-2.5">
                    <p class="text-[11px] uppercase tracking-wide text-blue-500 font-semibold">Panel Navigasi</p>
                    <p class="text-xs text-slate-600 mt-1">Kelola data akademik dan inventaris dari satu tempat.</p>
                </div>
            </div>
            <nav class="flex-1 p-4 overflow-y-auto">
                <p class="nav-title">Data Akademik</p>
                <div class="space-y-1.5">
                <a href="{{ route('jurusans.index') }}" class="sidebar-link {{ request()->routeIs('jurusans.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m0 10h1m-1 4h1m-7 10v-2a2 2 0 012-2h12a2 2 0 012 2v2"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Jurusan</span>
                </a>
                <a href="{{ route('kelas.index') }}" class="sidebar-link {{ request()->routeIs('kelas.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Kelas</span>
                </a>
                <a href="{{ route('labs.index') }}" class="sidebar-link {{ request()->routeIs('labs.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Lab</span>
                </a>
                </div>

                <p class="nav-title mt-6">Inventaris</p>
                <div class="space-y-1.5">
                <a href="{{ route('suppliers.index') }}" class="sidebar-link {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m0 10h1m-1 4h1m-7 10v-2a2 2 0 012-2h12a2 2 0 012 2v2"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Data Supplier</span>
                </a>
                <a href="{{ route('barangs.index') }}" class="sidebar-link {{ request()->routeIs('barangs.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Data Barang</span>
                </a>
                </div>

                @if(Auth::user() && Auth::user()->isAdmin())
                <p class="nav-title mt-6">Administrasi</p>
                <a href="{{ route('users.index') }}" class="sidebar-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <span class="icon-wrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </span>
                    <span class="text-sm font-medium">Kelola User</span>
                </a>
                @endif
            </nav>
            <div class="p-4 border-t border-slate-100 bg-white/80 backdrop-blur-sm">
                <div class="flex items-center p-3 rounded-xl bg-slate-50 border border-slate-100 mb-3">
                    <div class="w-9 h-9 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs mr-3">
                        {{ substr(Auth::user()->name ?? 'U', 0, 2) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900 truncate">{{ Auth::user()->name ?? 'Guest' }}</p>
                        <p class="text-xs text-slate-500 truncate capitalize">{{ str_replace('_', ' ', Auth::user()->role ?? 'Guest') }}</p>
                    </div>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2.5 p-2.5 rounded-xl bg-red-50 hover:bg-red-100 text-red-600 transition-colors border border-red-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="text-sm font-semibold">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
                <h2 class="text-xl font-semibold text-slate-800">@yield('title')</h2>
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-slate-400 hover:text-slate-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                </div>
            </header>

            <div class="flex-1 overflow-y-auto p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 rounded-xl flex items-center animate-fade-in-down">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
