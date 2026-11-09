<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin - PAUD Al-Barokah')</title>
    <style>
        * { box-sizing: border-box; margin:0; padding:0; }
        body { font-family: 'Segoe UI', sans-serif; background:#f1f5f9; display:flex; min-height:100vh; }

        .sidebar { width: 230px; background: #0f172a; color: #cbd5e1; padding: 1.5rem 0; flex-shrink: 0; }
        .sidebar .brand { color: white; font-weight: bold; font-size: 1.1rem; padding: 0 1.5rem 1rem; }
        .sidebar .me { display:flex; align-items:center; gap:0.7rem; padding: 0 1.5rem 1.2rem; border-bottom: 1px solid #1e293b; margin-bottom: 1rem; }
        .sidebar .me img, .sidebar .me .avatar { width:38px; height:38px; border-radius:50%; object-fit:cover; flex-shrink:0; }
        .sidebar .me .avatar { background:#0B3D91; color:white; font-weight:700; display:flex; align-items:center; justify-content:center; }
        .sidebar .me span { color:white; font-size:0.85rem; font-weight:600; line-height:1.2; }
        .sidebar a { display: block; color: #cbd5e1; text-decoration: none; padding: 0.75rem 1.5rem; font-size: 0.9rem; }
        .sidebar a.active, .sidebar a:hover { background: #0B3D91; color: white; }
        .sidebar form { margin-top: 1rem; border-top: 1px solid #1e293b; padding-top: 1rem; }
        .sidebar form button { width: 100%; background: none; border: none; color: #f87171; text-align: left; padding: 0.75rem 1.5rem; font-size: 0.9rem; cursor: pointer; }
        .sidebar form button:hover { background: #1e293b; }

        .content { flex: 1; padding: 2rem; max-width: 100%; overflow-x: auto; }
        .content h1 { color:#1e293b; margin-bottom: 1.2rem; font-size: 1.5rem; }

        .btn { display:inline-block; background:#0B3D91; color:white; padding:9px 18px; border-radius:6px; text-decoration:none; font-size:0.9rem; font-weight:500; border:none; cursor:pointer; }
        .btn:hover { background:#082c6b; }
        .btn-back { color:#0B3D91; text-decoration:none; font-size:0.9rem; display:inline-block; margin-bottom:1rem; }

        .alert-success { background:#dcfce7; color:#166534; padding:0.8rem 1rem; border-radius:8px; margin-bottom:1.2rem; font-size:0.9rem; }

        table { width:100%; border-collapse: collapse; background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05); }
        th, td { text-align:left; padding:12px 16px; border-bottom:1px solid #e2e8f0; font-size:0.9rem; }
        th { background:#f8fafc; color:#475569; font-weight:600; }
        tr:last-child td { border-bottom:none; }
        img.thumb { width:55px; height:55px; object-fit:cover; border-radius:6px; }

        .link-edit { color:#0B3D91; text-decoration:none; margin-right:0.8rem; }
        .link-delete { color:#dc2626; background:none; border:none; cursor:pointer; font-size:0.9rem; }

        .form-card { background:white; padding:1.8rem; border-radius:10px; max-width:480px; box-shadow:0 2px 8px rgba(0,0,0,0.05); }
        .form-group { margin-bottom:1.1rem; }
        .form-group label { display:block; font-size:0.85rem; font-weight:600; color:#334155; margin-bottom:0.4rem; }
        .form-group input, .form-group textarea { width:100%; padding:0.6rem 0.8rem; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem; font-family:inherit; }
        .form-group input:focus, .form-group textarea:focus { outline:none; border-color:#0B3D91; }
        .error-text { color:#dc2626; font-size:0.8rem; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="brand">PAUD Al-Barokah</div>

        <div class="me">
            @if (Auth::user()->foto)
                <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Foto admin">
            @else
                <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
            @endif
            <span>{{ Auth::user()->name }}</span>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.guru.index') }}" class="{{ request()->routeIs('admin.guru.*') ? 'active' : '' }}">Data Guru</a>
        <a href="{{ route('admin.galeri.index') }}" class="{{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">Data Galeri</a>
        <a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">Data Berita</a>
        <a href="{{ route('admin.profil.edit') }}" class="{{ request()->routeIs('admin.profil.*') ? 'active' : '' }}">Profil Saya</a>
        <a href="{{ route('beranda') }}" target="_blank">Lihat Website</a>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">&larr; Logout</button>
        </form>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>