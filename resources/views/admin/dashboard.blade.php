@extends('layouts.admin')
@section('title', 'Dashboard - Admin')

@section('content')
    <h1>Dashboard</h1>
    <div style="display:flex; gap:1.2rem; flex-wrap:wrap;">
        <div style="background:white; border-radius:12px; padding:1.5rem; flex:1; min-width:200px; box-shadow:0 2px 8px rgba(0,0,0,0.05); border-left:5px solid #1e40af;">
            <h3 style="color:#64748b; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.5rem;">Total Guru</h3>
            <p style="font-size:2rem; font-weight:bold; color:#1e293b;">{{ $totalGuru }}</p>
        </div>
        <div style="background:white; border-radius:12px; padding:1.5rem; flex:1; min-width:200px; box-shadow:0 2px 8px rgba(0,0,0,0.05); border-left:5px solid #1e40af;">
            <h3 style="color:#64748b; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.5rem;">Total Galeri</h3>
            <p style="font-size:2rem; font-weight:bold; color:#1e293b;">{{ $totalGaleri }}</p>
        </div>
        <div style="background:white; border-radius:12px; padding:1.5rem; flex:1; min-width:200px; box-shadow:0 2px 8px rgba(0,0,0,0.05); border-left:5px solid #1e40af;">
            <h3 style="color:#64748b; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.5rem;">Total Berita</h3>
            <p style="font-size:2rem; font-weight:bold; color:#1e293b;">{{ $totalBerita }}</p>
        </div>
    </div>
@endsection