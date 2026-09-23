@extends('layouts.public')

@section('title', 'Galeri - PAUD Al-Barokah')

@section('content')
    <h1 style="color:#1e40af;">Galeri Kegiatan</h1>
    <p>Dokumentasi kegiatan belajar dan bermain di PAUD Al-Barokah.</p>

    <div style="display:flex; gap:1.5rem; flex-wrap:wrap; margin-top:2rem;">
        @forelse ($galeri as $item)
            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:1rem; width:280px;">
                @if ($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" style="width:100%; height:180px; object-fit:cover; border-radius:8px;">
                @else
                    <div style="width:100%; height:180px; background:#e0e7ff; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#94a3b8;">
                        Tanpa Foto
                    </div>
                @endif
                <h3 style="margin-bottom:0.2rem;">{{ $item->judul }}</h3>
                <p style="color:#64748b; font-size:0.9rem; margin-top:0;">{{ $item->tanggal->format('d-m-Y') }}</p>
                @if ($item->deskripsi)
                    <p style="font-size:0.9rem;">{{ Str::limit($item->deskripsi, 80) }}</p>
                @endif
            </div>
        @empty
            <p>Belum ada data galeri.</p>
        @endforelse
    </div>
@endsection