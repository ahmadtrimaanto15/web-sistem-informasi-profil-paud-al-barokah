@extends('layouts.public')
@section('title', 'Kontak - PAUD Al-Barokah')

@section('content')
@include('partials.banner', ['title' => 'Hubungi Kami', 'subtitle' => 'Punya pertanyaan seputar pendaftaran atau program sekolah? Jangan ragu menghubungi kami.'])

<div style="max-width:1000px; margin:0 auto; padding:3rem 2rem; display:flex; gap:2rem; flex-wrap:wrap;">
    <div style="flex:1; min-width:280px;">
        <h3 style="color:#1e40af; margin-bottom:0.3rem;">Alamat Sekolah</h3>
        <p style="color:#334155; margin-bottom:1.2rem;">Kedung Dalem, Kec. Mauk, Kab. Tangerang, Banten</p>

        <h3 style="color:#1e40af; margin-bottom:0.3rem;">Telepon / WhatsApp</h3>
        <p style="color:#334155; margin-bottom:1.2rem;">(0895) 1501 5175</p>

        <h3 style="color:#1e40af; margin-bottom:0.3rem;">Email</h3>
        <p style="color:#334155; margin-bottom:1.2rem;">info@paudalbarokah.sch.id</p>

        <h3 style="color:#1e40af; margin-bottom:0.3rem;">Jam Operasional</h3>
        <p style="color:#334155;">Senin - Jumat: 08.00 - 12.00<br>Sabtu & Minggu: Libur</p>
    </div>
    <div style="flex:1; min-width:280px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53355.03211022058!2d106.66520177543183!3d-6.311393652344794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41fe1a76b679fb%3A0x341110ba64933af5!2sPAUD%20AL-BAROKAH!5e0!3m2!1sid!2sid!4v1790149680154!5m2!1sid!2sid"
            width="100%" height="280" style="border:0; border-radius:12px;"
            allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>
</div>
@endsection