@extends('layouts.admin')
@section('title', 'Edit Berita - Admin')

@section('content')
    <a href="{{ route('admin.berita.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Edit Berita</h1>

    <div class="form-card" style="max-width:600px;">
        <form action="{{ route('admin.berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}">
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}">
            </div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi" rows="6">{{ old('isi', $berita->isi) }}</textarea>
            </div>

            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" width="100" style="border-radius:8px; margin-bottom:1rem;"><br>
            @endif

            <div class="form-group">
                <label>Ganti Gambar (kosongkan jika tidak diubah)</label>
                <input type="file" name="gambar">
            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
@endsection