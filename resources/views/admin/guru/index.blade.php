@extends('layouts.admin')
@section('title', 'Data Guru - Admin')

@section('content')
    <h1>Data Guru</h1>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.guru.create') }}" class="btn" style="margin-bottom:1.2rem; display:inline-block;">+ Tambah Guru</a>

    <table>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
        @forelse ($guru as $item)
            <tr>
                <td>
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" class="thumb">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>
                    <a href="{{ route('admin.guru.edit', $item->id_guru) }}" class="link-edit">Edit</a>
                    <form action="{{ route('admin.guru.destroy', $item->id_guru) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="link-delete">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">Belum ada data guru.</td></tr>
        @endforelse
    </table>
@endsection