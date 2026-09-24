@extends('layouts.public')
@section('title', 'Beranda - PAUD Al-Barokah')

@section('content')
<div style="background:#eef2ff; padding:3rem 2rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="max-width:650px;">
            <p style="color:#1e3a8a; font-weight:600; font-size:0.95rem; margin-bottom:0.4rem;">Selamat Datang di</p>
            <h1 style="color:#1e3a8a; font-size:2.6rem; font-weight:800; line-height:1.15; margin-bottom:1rem;">PAUD Al-Barokah</h1>
            <p style="font-size:1.05rem; font-weight:700; color:#1e293b; margin-bottom:0.7rem; line-height:1.4;">Membentuk Generasi Cerdas, Ceria, dan Berakhlak Mulia</p>
            <p style="color:#64748b; margin-bottom:1.6rem; line-height:1.6; font-size:0.95rem;">
                Kami menyediakan lingkungan belajar yang aman, nyaman, dan menyenangkan
                untuk mendukung tumbuh kembang anak secara optimal.
            </p>
            <a href="{{ route('profil') }}" style="background:#1e3a8a; color:white; padding:12px 26px; border-radius:8px; text-decoration:none; font-weight:600; margin-right:0.8rem; display:inline-block;">Tentang Kami</a>
            <a href="{{ route('kontak') }}" style="background:white; color:#1e3a8a; padding:12px 26px; border-radius:8px; text-decoration:none; font-weight:600; border:1.5px solid #1e3a8a; display:inline-block;">Hubungi Kami</a>
        </div>
    </div>
</div>

<div style="max-width:1200px; margin:0 auto; padding:3rem 2rem; display:flex; gap:2rem; flex-wrap:wrap; align-items:flex-start;">

    <div style="flex:1; min-width:280px;">
        <h2 style="color:#1e3a8a; font-size:1.05rem; margin-bottom:0.9rem;">Profil Sekolah</h2>
        <div style="background:white; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
            <div style="width:100%; height:150px; overflow:hidden;">
                <img src="{{ asset('images/sekolah.jpg') }}" style="width:100%; height:100%; object-fit:cover; display:block;">
            </div>
            <div style="padding:1rem;">
                <p style="font-size:0.85rem; color:#64748b; line-height:1.6; margin-bottom:0.6rem;">
                    PAUD Al-Barokah berdiri sejak tahun 2008 dengan komitmen memberikan
                    pendidikan berkualitas bagi anak usia dini.
                </p>
                <a href="{{ route('profil') }}" style="color:#1e3a8a; font-weight:600; text-decoration:none; font-size:0.85rem;">Selengkapnya &rarr;</a>
            </div>
        </div>
    </div>

    <div style="flex:1; min-width:280px;">
        <h2 style="color:#1e3a8a; font-size:1.05rem; margin-bottom:0.9rem;">Berita Terbaru</h2>
        @forelse ($berita as $item)
            <div style="display:flex; gap:0.8rem; background:white; border-radius:10px; padding:0.7rem; margin-bottom:0.8rem; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
                <div style="width:70px; height:70px; border-radius:8px; overflow:hidden; flex-shrink:0;">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" style="width:100%; height:100%; object-fit:cover; display:block;">
                    @else
                        <div style="width:100%; height:100%; background:#e0e7ff;"></div>
                    @endif
                </div>
                <div>
                    <h3 style="font-size:0.88rem; color:#1e293b; margin-bottom:0.15rem;">{{ $item->judul }}</h3>
                    <p style="font-size:0.72rem; color:#94a3b8; margin-bottom:0.3rem;">{{ $item->tanggal->format('d-m-Y') }}</p>
                    <p style="font-size:0.78rem; color:#64748b; line-height:1.4;">{{ Str::limit($item->isi, 50) }}</p>
                </div>
            </div>
        @empty
            <p style="color:#94a3b8; font-size:0.9rem;">Belum ada berita.</p>
        @endforelse
        <a href="{{ route('berita.public') }}" style="color:#1e3a8a; font-weight:600; text-decoration:none; font-size:0.85rem;">Lihat Semua Berita &rarr;</a>
    </div>

    <div style="flex:1; min-width:280px;">
        <h2 style="color:#1e3a8a; font-size:1.05rem; margin-bottom:0.9rem;">Galeri</h2>
        <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:0.6rem;">
            @forelse ($galeriTerbaru as $item)
                <div style="width:100%; aspect-ratio:1; border-radius:8px; overflow:hidden; background:#e0e7ff;">
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" style="width:100%; height:100%; object-fit:cover; display:block;">
                    @endif
                </div>
            @empty
                <p style="color:#94a3b8; font-size:0.9rem;">Belum ada galeri.</p>
            @endforelse
        </div>
        <a href="{{ route('galeri.public') }}" style="display:inline-block; margin-top:0.8rem; color:#1e3a8a; font-weight:600; text-decoration:none; font-size:0.85rem;">Lihat Semua Galeri &rarr;</a>
    </div>

</div>
@endsection