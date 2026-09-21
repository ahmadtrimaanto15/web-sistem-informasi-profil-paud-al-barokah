<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem; max-width:500px;">
        <a href="{{ route('berita.index') }}">&larr; Kembali</a>
        <h2>Edit Berita</h2>

        <form action="{{ route('berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Judul</label><br>
            <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <label>Tanggal</label><br>
            <input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <label>Isi Berita</label><br>
            <textarea name="isi" rows="6" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;">{{ old('isi', $berita->isi) }}</textarea><br>

            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" width="100"><br><br>
            @endif

            <label>Ganti Gambar (kosongkan jika tidak diubah)</label><br>
            <input type="file" name="gambar" style="margin-bottom:1rem;"><br>

            <button type="submit" style="padding:10px 20px; background:#1e40af; color:white; border:none; border-radius:5px;">Update</button>
        </form>
    </div>
</body>
</html>