@extends('layouts.admin')
@section('title', 'Tambah Berita - Admin')

@section('content')
    <a href="{{ route('admin.berita.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Tambah Berita</h1>

    <div class="form-card" style="max-width:600px;">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
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
                <label>Isi Berita</label>
                <textarea name="isi" rows="6">{{ old('isi') }}</textarea>
                @error('isi') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar">
                @error('gambar') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
@endsection