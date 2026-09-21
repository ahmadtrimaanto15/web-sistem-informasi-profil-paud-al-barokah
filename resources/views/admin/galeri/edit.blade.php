<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Galeri - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem; max-width:400px;">
        <a href="{{ route('galeri.index') }}">&larr; Kembali</a>
        <h2>Edit Data Galeri</h2>

        <form action="{{ route('galeri.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Judul</label><br>
            <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <label>Tanggal</label><br>
            <input type="date" name="tanggal" value="{{ old('tanggal', $galeri->tanggal->format('Y-m-d')) }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <label>Deskripsi</label><br>
            <textarea name="deskripsi" rows="4" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;">{{ old('deskripsi', $galeri->deskripsi) }}</textarea><br>

            @if ($galeri->foto)
                <img src="{{ asset('storage/' . $galeri->foto) }}" width="80"><br><br>
            @endif

            <label>Ganti Foto (kosongkan jika tidak diubah)</label><br>
            <input type="file" name="foto" style="margin-bottom:1rem;"><br>

            <button type="submit" style="padding:10px 20px; background:#1e40af; color:white; border:none; border-radius:5px;">Update</button>
        </form>
    </div>
</body>
</html>