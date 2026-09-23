@extends('layouts.public')

@section('title', 'Beranda - PAUD Al-Barokah')

@section('content')
    <div style="background:linear-gradient(135deg, #e0e7ff, #dbeafe); padding:4rem 2rem; margin-bottom:2.5rem;">
        <div style="max-width:700px;">
            <h1 style="color:#1e3a8a; font-size:2.3rem; margin-bottom:1rem; line-height:1.3;">
                Selamat Datang di PAUD Al-Barokah
            </h1>
            <p style="color:#334155; font-size:1.05rem; margin-bottom:1.5rem; line-height:1.6;">
                Membentuk generasi cerdas, ceria, dan berakhlak mulia sejak usia dini.
            </p>
            <a href="{{ route('profil') }}" style="display:inline-block; background:#1e40af; color:white; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:600;">
                Tentang Kami
            </a>
        </div>
    </div>

    <div style="padding:0 2rem;">
        <h2 style="color:#1e293b; margin-bottom:1.2rem;">Berita Terbaru</h2>
        <div style="display:flex; gap:1.5rem; flex-wrap:wrap;">
            @forelse ($berita as $item)
                <div style="background:white; border-radius:10px; padding:1rem; width:280px; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" style="width:100%; height:160px; object-fit:cover; border-radius:6px;">
                    @endif
                    <h3 style="margin:0.8rem 0 0.3rem; color:#1e293b;">{{ $item->judul }}</h3>
                    <p style="font-size:0.85rem; color:#64748b; margin-bottom:0.6rem;">{{ $item->tanggal->format('d-m-Y') }}</p>
                    <a href="{{ route('berita.detail', $item->id_berita) }}" style="color:#1e40af; font-weight:600; text-decoration:none; font-size:0.9rem;">Baca selengkapnya &rarr;</a>
                </div>
            @empty
                <p>Belum ada berita.</p>
            @endforelse
        </div>
    </div>
@endsection