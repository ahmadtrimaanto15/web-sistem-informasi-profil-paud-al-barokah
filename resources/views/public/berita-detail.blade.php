@extends('layouts.public')
@section('title', $berita->judul . ' - PAUD Al-Barokah')

@section('content')
<div style="max-width:750px; margin:0 auto; padding:3rem 2rem;">
    <a href="{{ route('berita.public') }}" style="color:#0B3D91; text-decoration:none; font-size:0.9rem;">&larr; Kembali ke Berita</a>

    <h1 style="color:#0B3D91; margin:1rem 0 1rem;">{{ $berita->judul }}</h1>

    <div style="display:flex; align-items:center; gap:0.8rem; margin-bottom:1.5rem;">
        @if ($berita->admin && $berita->admin->foto)
            <img src="{{ asset('storage/' . $berita->admin->foto) }}" style="width:44px; height:44px; border-radius:50%; object-fit:cover; flex-shrink:0;">
        @else
            <div style="width:44px; height:44px; border-radius:50%; background:#0B3D91; color:white; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                {{ strtoupper(substr($berita->admin->name ?? 'A', 0, 1)) }}
            </div>
        @endif
        <div>
            <div style="font-size:0.9rem; font-weight:600; color:#1e293b;">{{ $berita->admin->name ?? 'Admin' }}</div>
            <div style="font-size:0.8rem; color:#94a3b8;">{{ $berita->tanggal->format('d-m-Y') }}</div>
        </div>
    </div>

    @if ($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" style="width:100%; border-radius:12px; margin-bottom:1.5rem;">
    @endif

    <div style="background:white; padding:1.5rem; border-radius:12px; line-height:1.7; color:#334155; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
        {!! nl2br(e($berita->isi)) !!}
    </div>
</div>
@endsection