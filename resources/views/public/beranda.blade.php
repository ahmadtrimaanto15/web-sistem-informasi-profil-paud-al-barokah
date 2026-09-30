@extends('layouts.public')
@section('title', 'Beranda - PAUD Al-Barokah')

@section('content')
<div style="background:#eef2ff; padding:2.5rem 2rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="max-width:600px;">
            <p style="color:#0B3D91; font-weight:600; font-size:1rem; margin-bottom:0.4rem;">Selamat Datang di</p>
            <h1 style="color:#0B3D91; font-size:2.8rem; font-weight:800; line-height:1.1; margin-bottom:1rem;">PAUD Al-Barokah</h1>
            <p style="font-size:1.15rem; font-weight:700; color:#1e293b; margin-bottom:0.7rem; line-height:1.4;">Membentuk Generasi Cerdas, Ceria, dan Berakhlak Mulia</p>
            <p style="color:#64748b; margin-bottom:1.5rem; line-height:1.6; font-size:1rem;">
                Kami menyediakan lingkungan belajar yang aman, nyaman, dan menyenangkan
                untuk mendukung tumbuh kembang anak secara optimal.
            </p>
            <a href="{{ route('profil') }}" style="background:#0B3D91; color:white; padding:12px 28px; border-radius:50px; text-decoration:none; font-weight:600; font-size:1rem; margin-right:0.8rem; display:inline-block;">Tentang Kami</a>
            <a href="{{ route('kontak') }}" style="background:white; color:#0B3D91; padding:12px 28px; border-radius:50px; text-decoration:none; font-weight:600; font-size:1rem; border:1.5px solid #0B3D91; display:inline-block;">Hubungi Kami</a>
        </div>
    </div>
</div>

<div style="max-width:1200px; margin:0 auto; padding:2.5rem 2rem; display:flex; gap:2rem; flex-wrap:wrap; align-items:flex-start;">

    <div style="flex:1; min-width:260px;">
        <h2 style="color:#0B3D91; font-size:0.95rem; font-weight:700; margin-bottom:0.7rem;">Profil Sekolah</h2>
        <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
            <div style="width:100%; height:130px; overflow:hidden;">
                <img src="{{ asset('images/sekolah.jpg') }}" style="width:100%; height:100%; object-fit:cover; display:block;">
            </div>
            <div style="padding:0.9rem;">
                <p style="font-size:0.8rem; color:#64748b; line-height:1.5; margin-bottom:0.5rem;">
                    PAUD Al-Barokah berdiri sejak tahun 2008 dengan komitmen memberikan
                    pendidikan berkualitas bagi anak usia dini. Kami percaya bahwa setiap
                    anak memiliki potensi luar biasa yang perlu dikembangkan.
                </p>
                <a href="{{ route('profil') }}" style="display:inline-block; background:white; color:#0B3D91; padding:6px 16px; border-radius:50px; border:1.5px solid #0B3D91; text-decoration:none; font-weight:600; font-size:0.78rem;">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div style="flex:1; min-width:260px;">
        <h2 style="color:#0B3D91; font-size:0.95rem; font-weight:700; margin-bottom:0.7rem;">Berita Terbaru</h2>
        @forelse ($berita as $item)
            <div style="display:flex; gap:0.7rem; margin-bottom:1rem;">
                <div style="width:60px; height:60px; border-radius:8px; overflow:hidden; flex-shrink:0;">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" style="width:100%; height:100%; object-fit:cover; display:block;">
                    @else
                        <div style="width:100%; height:100%; background:#e0e7ff;"></div>
                    @endif
                </div>
                <div>
                    <h3 style="font-size:0.82rem; color:#1e293b; margin-bottom:0.1rem; font-weight:700;">{{ $item->judul }}</h3>
                    <p style="font-size:0.68rem; color:#94a3b8; margin-bottom:0.25rem;">{{ strtoupper($item->tanggal->format('d M Y')) }}</p>
                    <p style="font-size:0.75rem; color:#64748b; line-height:1.35;">{{ Str::limit($item->isi, 55) }}</p>
                </div>
            </div>
        @empty
            <p style="color:#94a3b8; font-size:0.85rem;">Belum ada berita.</p>
        @endforelse
        <a href="{{ route('berita.public') }}" style="color:#0B3D91; font-weight:600; text-decoration:none; font-size:0.8rem;">Lihat Semua Berita &rarr;</a>
    </div>

    <div style="flex:1; min-width:260px;">
        <h2 style="color:#0B3D91; font-size:0.95rem; font-weight:700; margin-bottom:0.7rem;">Galeri</h2>
        <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:0.5rem;">
            @forelse ($galeriTerbaru as $item)
                <div style="width:100%; aspect-ratio:1; border-radius:8px; overflow:hidden; background:#e0e7ff;">
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" style="width:100%; height:100%; object-fit:cover; display:block;">
                    @endif
                </div>
            @empty
                <p style="color:#94a3b8; font-size:0.85rem;">Belum ada galeri.</p>
            @endforelse
        </div>
        <a href="{{ route('galeri.public') }}" style="display:inline-block; margin-top:0.7rem; color:#0B3D91; font-weight:600; text-decoration:none; font-size:0.8rem;">Lihat Semua Galeri &rarr;</a>
    </div>

</div>
@endsection