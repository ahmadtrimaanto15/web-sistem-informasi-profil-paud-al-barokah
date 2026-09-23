@extends('layouts.public')

@section('title', 'Kontak - PAUD Al-Barokah')

@section('content')
    <h1 style="color:#1e40af;">Hubungi Kami</h1>
    <p>Punya pertanyaan seputar pendaftaran atau kegiatan sekolah? Hubungi kami lewat kontak di bawah ini.</p>

    <div style="display:flex; gap:2rem; flex-wrap:wrap; margin-top:2rem;">
        <div style="flex:1; min-width:280px;">
            <h3>Alamat</h3>
            <p>Jl. Contoh No. 10, Kecamatan, Kota, Provinsi</p>

            <h3>Telepon</h3>
            <p>(021) 1234 5678</p>

            <h3>Email</h3>
            <p>info@paudalbarokah.sch.id</p>

            <h3>Jam Operasional</h3>
            <p>Senin - Jumat, 07.00 - 14.00 WIB</p>
        </div>

        <div style="flex:1; min-width:280px;">
            <iframe
                src="https://www.google.com/maps?q=Jakarta&output=embed"
                width="100%" height="250" style="border:0; border-radius:10px;"
                allowfullscreen loading="lazy">
            </iframe>
        </div>
    </div>
@endsection