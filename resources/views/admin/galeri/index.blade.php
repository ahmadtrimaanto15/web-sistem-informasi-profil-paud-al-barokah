@extends('layouts.admin')
@section('title', 'Data Galeri - Admin')

@section('content')
    <h1>Data Galeri</h1>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.galeri.create') }}" class="btn" style="margin-bottom:1.2rem; display:inline-block;">+ Tambah Galeri</a>

    <table>
        <tr>
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
                        <img src="{{ asset('storage/' . $item->foto) }}" class="thumb">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                <td>
                    <a href="{{ route('admin.galeri.edit', $item->id_galeri) }}" class="link-edit">Edit</a>
                    <form action="{{ route('admin.galeri.destroy', $item->id_galeri) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="link-delete">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada data galeri.</td></tr>
        @endforelse
    </table>
@endsection