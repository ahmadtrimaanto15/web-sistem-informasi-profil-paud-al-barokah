@extends('layouts.admin')
@section('title', 'Data Berita - Admin')

@section('content')
    <h1>Data Berita</h1>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.berita.create') }}" class="btn" style="margin-bottom:1.2rem; display:inline-block;">+ Tambah Berita</a>

    <table>
        <tr>
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
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="thumb">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                <td>{{ $item->admin->name ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.berita.edit', $item->id_berita) }}" class="link-edit">Edit</a>
                    <form action="{{ route('admin.berita.destroy', $item->id_berita) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="link-delete">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada berita.</td></tr>
        @endforelse
    </table>
@endsection