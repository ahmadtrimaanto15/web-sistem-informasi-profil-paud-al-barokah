<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Berita - Admin</title>
</head>
<body style="font-family: sans-serif; margin:0;">
    <div style="background:#1e40af; color:white; padding:1rem 2rem;">
        <span>PAUD Al-Barokah - Admin Dashboard</span>
    </div>

    <div style="padding:2rem;">
        <a href="{{ route('admin.dashboard') }}">&larr; Kembali ke Dashboard</a>
        <h2>Data Berita</h2>

        @if (session('success'))
            <div style="background:#dcfce7; color:#166534; padding:10px; border-radius:5px; margin-bottom:1rem;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('berita.create') }}" style="display:inline-block; background:#1e40af; color:white; padding:8px 16px; border-radius:5px; text-decoration:none; margin-bottom:1rem;">+ Tambah Berita</a>

        <table border="1" cellpadding="10" style="border-collapse: collapse; width:100%;">
            <tr style="background:#e0e7ff;">
                <th>Gambar</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
            @forelse ($berita as $item)
                <tr>
                    <td>
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" width="60">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                    <td>{{ $item->admin->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('berita.edit', $item->id_berita) }}">Edit</a>
                        |
                        <form action="{{ route('berita.destroy', $item->id_berita) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border:none; background:none; color:red; cursor:pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada berita.</td></tr>
            @endforelse
        </table>
    </div>
</body>
</html>