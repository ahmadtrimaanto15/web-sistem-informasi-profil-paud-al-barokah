@extends('layouts.admin')
@section('title', 'Edit Guru - Admin')

@section('content')
    <a href="{{ route('admin.guru.index') }}" class="btn-back">&larr; Kembali</a>
    <h1>Edit Data Guru</h1>

    <div class="form-card">
        <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $guru->nama) }}">
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" value="{{ old('jabatan', $guru->jabatan) }}">
            </div>

            @if ($guru->foto)
                <img src="{{ asset('storage/' . $guru->foto) }}" width="80" style="border-radius:8px; margin-bottom:1rem;"><br>
            @endif

            <div class="form-group">
                <label>Ganti Foto (kosongkan jika tidak diubah)</label>
                <input type="file" name="foto">
            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
@endsection