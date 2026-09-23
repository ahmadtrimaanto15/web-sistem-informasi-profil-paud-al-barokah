@extends('layouts.admin')
@section('title', 'Edit Galeri - Admin')

@section('content')
    <a href="{{ route('admin.galeri.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Edit Data Galeri</h1>

    <div class="form-card">
        <form action="{{ route('admin.galeri.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}">
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal', $galeri->tanggal->format('Y-m-d')) }}">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            </div>

            @if ($galeri->foto)
                <img src="{{ asset('storage/' . $galeri->foto) }}" width="80" style="border-radius:8px; margin-bottom:1rem;"><br>
            @endif

            <div class="form-group">
                <label>Ganti Foto (kosongkan jika tidak diubah)</label>
                <input type="file" name="foto">
            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
@endsection