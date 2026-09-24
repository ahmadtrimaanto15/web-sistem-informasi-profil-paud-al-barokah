@extends('layouts.public')
@section('title', 'Berita - PAUD Al-Barokah')

@section('content')
@include('partials.banner', ['title' => 'Berita & Pengumuman', 'subtitle' => 'Ikuti terus informasi terbaru dan keseruan kegiatan anak-anak di sekolah kami.'])

<div style="max-width:1100px; margin:0 auto; padding:3rem 2rem;">
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(260px, 1fr)); gap:1.5rem;">
        @forelse ($berita as $item)
            <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" style="width:100%; height:160px; object-fit:cover;">
                @endif
                <div style="padding:1rem;">
                    <h3 style="color:#1e293b; margin-bottom:0.3rem;">{{ $item->judul }}</h3>
                    <p style="font-size:0.8rem; color:#94a3b8; margin-bottom:0.6rem;">{{ $item->tanggal->format('d-m-Y') }}</p>
                    <a href="{{ route('berita.detail', $item->id_berita) }}" style="color:#1e40af; font-weight:600; text-decoration:none; font-size:0.9rem;">Baca selengkapnya &rarr;</a>
                </div>
            </div>
        @empty
            <p>Belum ada berita.</p>
        @endforelse
    </div>
</div>
@endsection