@extends('layouts.public')

@section('title', 'Guru - PAUD Al-Barokah')

@section('content')
    <h1 style="color:#1e40af;">Guru & Tenaga Pendidik</h1>
    <p>Tenaga pendidik berpengalaman dan penuh kasih sayang.</p>

    <div style="display:flex; gap:1.5rem; flex-wrap:wrap; margin-top:2rem;">
        @forelse ($guru as $item)
            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:1rem; width:220px; text-align:center;">
                @if ($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                @else
                    <div style="width:100%; height:200px; background:#e0e7ff; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#94a3b8;">
                        Tanpa Foto
                    </div>
                @endif
                <h3 style="margin-bottom:0.2rem;">{{ $item->nama }}</h3>
                <p style="color:#64748b; margin-top:0;">{{ $item->jabatan }}</p>
            </div>
        @empty
            <p>Belum ada data guru.</p>
        @endforelse
    </div>
@endsection