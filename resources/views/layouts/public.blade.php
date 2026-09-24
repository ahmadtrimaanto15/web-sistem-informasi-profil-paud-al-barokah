<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PAUD Al-Barokah')</title>
    <style>
        * { box-sizing: border-box; margin:0; padding:0; }
        body { font-family: 'Segoe UI', sans-serif; color:#1e293b; background:#f8fafc; }

        .topbar {
            background:#1e3a8a; color:white; font-size:0.85rem;
            padding:0.5rem 2rem; display:flex; justify-content:space-between; flex-wrap:wrap;
        }
        .topbar span { margin-right:1.5rem; }

        nav {
            background:white; padding:1rem 2rem; display:flex;
            justify-content:space-between; align-items:center;
            box-shadow:0 2px 6px rgba(0,0,0,0.06); position:sticky; top:0; z-index:10;
        }
        nav .logo { font-weight:bold; font-size:1.3rem; color:#1e40af; }
        nav .menu a {
            color:#334155; margin-left:1.5rem; text-decoration:none; font-weight:500;
        }
        nav .menu a:hover, nav .menu a.active { color:#1e40af; }
        nav .menu a.btn-login {
            background:#1e40af; color:white; padding:8px 18px; border-radius:6px; margin-left:1.5rem;
        }
        nav .menu a.btn-login:hover { background:#1e3a8a; color:white; }

        main { min-height:70vh; }

        footer {
            background:#0f172a; color:#cbd5e1; text-align:center; padding:2rem; margin-top:3rem;
        }

        @media (max-width: 768px) {
            nav { flex-direction:column; gap:0.8rem; }
            nav .menu a { margin:0 0.6rem; font-size:0.9rem; }
        }
    </style>
</head>
<body>

    <div class="topbar">
        <div>
            <span>&#128222; (0895) 1501 5175</span>
        </div>
        <div>Senin - Jumat, 08.00 - 12.00 WIB</div>
    </div>

    <nav>
        <div class="logo">
            PAUD Al-Barokah
            <div style="font-size:0.7rem; font-weight:400; color:#64748b;">Cerdas - Ceria - Berakhlak Mulia</div>
        </div>
        <div class="menu">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a>
            <a href="{{ route('guru.public') }}" class="{{ request()->routeIs('guru.public') ? 'active' : '' }}">Guru</a>
            <a href="{{ route('galeri.public') }}" class="{{ request()->routeIs('galeri.public') ? 'active' : '' }}">Galeri</a>
            <a href="{{ route('berita.public') }}" class="{{ request()->routeIs('berita.*') ? 'active' : '' }}">Berita</a>
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
            <a href="{{ route('admin.login') }}" class="btn-login">Login Admin</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} PAUD Al-Barokah. All rights reserved.
    </footer>

</body>
</html>