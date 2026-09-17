<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem; display:flex; justify-content:space-between; align-items:center;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" style="background:none; border:1px solid white; color:white; padding:5px 10px; border-radius:5px;">Logout</button>
        </form>
    </div>

    <div style="padding:2rem; display:flex; gap:1rem;">
        <div style="background:#e0e7ff; padding:1.5rem; border-radius:10px; flex:1;">
            <h3>Total Guru</h3>
            <p style="font-size:2rem; font-weight:bold;">{{ $totalGuru }}</p>
        </div>
        <div style="background:#e0e7ff; padding:1.5rem; border-radius:10px; flex:1;">
            <h3>Total Galeri</h3>
            <p style="font-size:2rem; font-weight:bold;">{{ $totalGaleri }}</p>
        </div>
        <div style="background:#e0e7ff; padding:1.5rem; border-radius:10px; flex:1;">
            <h3>Total Berita</h3>
            <p style="font-size:2rem; font-weight:bold;">{{ $totalBerita }}</p>
        </div>
    </div>
</body>
</html>