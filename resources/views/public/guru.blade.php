@extends('layouts.public')
@section('title', 'Guru - PAUD Al-Barokah')

@section('content')
@include('partials.banner', ['title' => 'Guru & Staf Pengajar', 'subtitle' => 'Orang-orang hebat di balik keceriaan dan perkembangan anak-anak kita.'])

<div style="max-width:1100px; margin:0 auto; padding:3rem 2rem;">
    <div style="display:flex; gap:1.5rem; flex-wrap:wrap;">
        @forelse ($guru as $item)
            <div style="background:white; border-radius:12px; padding:1.5rem; width:220px; text-align:center; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
                @if ($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" style="width:90px; height:90px; object-fit:cover; border-radius:50%; margin-bottom:0.8rem;">
                @else
                    <div style="width:90px; height:90px; border-radius:50%; background:#e0e7ff; margin:0 auto 0.8rem; display:flex; align-items:center; justify-content:center; color:#94a3b8;">?</div>
                @endif
                <h3 style="margin-bottom:0.2rem; color:#1e293b;">{{ $item->nama }}</h3>
                <p style="color:#64748b; font-size:0.85rem; text-transform:uppercase;">{{ $item->jabatan }}</p>
            </div>
        @empty
            <p>Belum ada data guru.</p>
        @endforelse
    </div>
</div>
@endsection