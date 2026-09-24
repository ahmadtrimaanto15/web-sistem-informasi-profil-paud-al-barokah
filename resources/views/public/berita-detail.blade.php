@extends('layouts.public')
@section('title', $berita->judul . ' - PAUD Al-Barokah')

@section('content')
<div style="max-width:750px; margin:0 auto; padding:3rem 2rem;">
    <a href="{{ route('berita.public') }}" style="color:#1e40af; text-decoration:none; font-size:0.9rem;">&larr; Kembali ke Berita</a>

    <h1 style="color:#1e3a8a; margin:1rem 0 0.3rem;">{{ $berita->judul }}</h1>
    <p style="color:#64748b; margin-bottom:1.5rem;">
        {{ $berita->tanggal->format('d-m-Y') }}
        @if ($berita->admin)
            &middot; oleh {{ $berita->admin->name }}
        @endif
    </p>

    @if ($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" style="width:100%; border-radius:12px; margin-bottom:1.5rem;">
    @endif

    <div style="background:white; padding:1.5rem; border-radius:12px; line-height:1.7; color:#334155; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
        {!! nl2br(e($berita->isi)) !!}
    </div>
</div>
@endsection