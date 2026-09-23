@extends('layouts.admin')
@section('title', 'Tambah Galeri - Admin')

@section('content')
    <a href="{{ route('admin.galeri.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Tambah Data Galeri</h1>

    <div class="form-card">
        <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}">
                @error('judul') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal') }}">
                @error('tanggal') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto">
                @error('foto') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
@endsection