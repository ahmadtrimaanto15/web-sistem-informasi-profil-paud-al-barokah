@extends('layouts.public')

@section('title', $berita->judul . ' - PAUD Al-Barokah')

@section('content')
    <a href="{{ route('berita.public') }}">&larr; Kembali ke Berita</a>

    <h1 style="color:#1e40af; margin-bottom:0.2rem;">{{ $berita->judul }}</h1>
    <p style="color:#64748b;">
        {{ $berita->tanggal->format('d-m-Y') }}
        @if ($berita->admin)
            &middot; oleh {{ $berita->admin->name }}
        @endif
    </p>

    @if ($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" style="width:100%; max-width:600px; border-radius:10px; margin:1rem 0;">
    @endif

    <div style="max-width:700px; line-height:1.6;">
        {!! nl2br(e($berita->isi)) !!}
    </div>
@endsection