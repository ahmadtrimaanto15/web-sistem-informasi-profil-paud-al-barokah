<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Galeri - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem;">
        <a href="{{ route('admin.dashboard') }}">&larr; Kembali ke Dashboard</a>
        <h2>Data Galeri</h2>

        @if (session('success'))
            <div style="background:#dcfce7; color:#166534; padding:10px; border-radius:5px; margin-bottom:1rem;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('galeri.create') }}" style="display:inline-block; background:#1e40af; color:white; padding:8px 16px; border-radius:5px; text-decoration:none; margin-bottom:1rem;">+ Tambah Galeri</a>

        <table border="1" cellpadding="10" style="border-collapse: collapse; width:100%;">
            <tr style="background:#e0e7ff;">
                <th>Foto</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            @forelse ($galeri as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" width="60">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                    <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                    <td>
                        <a href="{{ route('galeri.edit', $item->id_galeri) }}">Edit</a>
                        |
                        <form action="{{ route('galeri.destroy', $item->id_galeri) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border:none; background:none; color:red; cursor:pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data galeri.</td></tr>
            @endforelse
        </table>
    </div>
</body>
</html>