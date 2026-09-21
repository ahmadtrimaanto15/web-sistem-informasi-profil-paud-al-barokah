<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem; max-width:500px;">
        <a href="{{ route('berita.index') }}">&larr; Kembali</a>
        <h2>Tambah Berita</h2>

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Judul</label><br>
            <input type="text" name="judul" value="{{ old('judul') }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>
            @error('judul') <span style="color:red;">{{ $message }}</span> @enderror

            <label>Tanggal</label><br>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>
            @error('tanggal') <span style="color:red;">{{ $message }}</span> @enderror

            <label>Isi Berita</label><br>
            <textarea name="isi" rows="6" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;">{{ old('isi') }}</textarea><br>
            @error('isi') <span style="color:red;">{{ $message }}</span> @enderror

            <label>Gambar</label><br>
            <input type="file" name="gambar" style="margin-bottom:1rem;"><br>
            @error('gambar') <span style="color:red;">{{ $message }}</span> @enderror

            <button type="submit" style="padding:10px 20px; background:#1e40af; color:white; border:none; border-radius:5px;">Simpan</button>
        </form>
    </div>
</body>
</html>