@extends('layouts.public')
@section('title', 'Galeri - PAUD Al-Barokah')

@section('content')
@include('partials.banner', ['title' => 'Galeri Kegiatan', 'subtitle' => 'Momen-momen keceriaan dan proses belajar anak-anak di PAUD Al-Barokah.'])

<div style="max-width:1100px; margin:0 auto; padding:3rem 2rem;">
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(250px, 1fr)); gap:1.2rem;">
        @forelse ($galeri as $item)
            <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
                @if ($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" style="width:100%; height:180px; object-fit:cover;">
                @endif
                <div style="padding:0.8rem;">
                    <h3 style="font-size:0.95rem; color:#1e293b; margin-bottom:0.2rem;">{{ $item->judul }}</h3>
                    <p style="font-size:0.8rem; color:#94a3b8;">{{ $item->tanggal->format('d-m-Y') }}</p>
                </div>
            </div>
        @empty
            <p>Belum ada data galeri.</p>
        @endforelse
    </div>
</div>
@endsection