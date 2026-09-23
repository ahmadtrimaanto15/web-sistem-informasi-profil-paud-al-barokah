@extends('layouts.public')

@section('title', 'Berita - PAUD Al-Barokah')

@section('content')
    <h1 style="color:#1e40af;">Berita & Kegiatan</h1>

    <div style="display:flex; gap:1.5rem; flex-wrap:wrap; margin-top:2rem;">
        @forelse ($berita as $item)
            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:1rem; width:280px;">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" style="width:100%; height:160px; object-fit:cover; border-radius:8px;">
                @else
                    <div style="width:100%; height:160px; background:#e0e7ff; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#94a3b8;">
                        Tanpa Gambar
                    </div>
                @endif
                <h3 style="margin-bottom:0.2rem;">{{ $item->judul }}</h3>
                <p style="color:#64748b; font-size:0.9rem; margin-top:0;">{{ $item->tanggal->format('d-m-Y') }}</p>
                <p style="font-size:0.9rem;">{{ Str::limit($item->isi, 80) }}</p>
                <a href="{{ route('berita.detail', $item->id_berita) }}" style="color:#1e40af; font-weight:bold; text-decoration:none;">Baca selengkapnya &rarr;</a>
            </div>
        @empty
            <p>Belum ada berita.</p>
        @endforelse
    </div>
@endsection