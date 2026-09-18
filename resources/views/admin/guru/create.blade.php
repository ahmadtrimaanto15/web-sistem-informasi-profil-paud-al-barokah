<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Guru - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem; max-width:400px;">
        <a href="{{ route('guru.index') }}">&larr; Kembali</a>
        <h2>Tambah Data Guru</h2>

        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>
            @error('nama') <span style="color:red;">{{ $message }}</span> @enderror

            <label>Jabatan</label><br>
            <input type="text" name="jabatan" value="{{ old('jabatan') }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>
            @error('jabatan') <span style="color:red;">{{ $message }}</span> @enderror

            <label>Foto</label><br>
            <input type="file" name="foto" style="margin-bottom:1rem;"><br>
            @error('foto') <span style="color:red;">{{ $message }}</span> @enderror

            <button type="submit" style="padding:10px 20px; background:#1e40af; color:white; border:none; border-radius:5px;">Simpan</button>
        </form>
    </div>
</body>
</html>