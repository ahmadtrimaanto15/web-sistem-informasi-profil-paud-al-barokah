@extends('layouts.admin')
@section('title', 'Tambah Guru - Admin')

@section('content')
    <a href="{{ route('admin.guru.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Tambah Data Guru</h1>

    <div class="form-card">
        <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}">
                @error('nama') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" value="{{ old('jabatan') }}">
                @error('jabatan') <span class="error-text">{{ $message }}</span> @enderror
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