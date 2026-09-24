@extends('layouts.public')
@section('title', 'Profil - PAUD Al-Barokah')

@section('content')
<style>
    .profil-wrap { max-width:1100px; margin:0 auto; padding:3rem 2rem; display:flex; gap:2.5rem; }
    .profil-kiri { flex:1.4; min-width:0; }
    .profil-kanan { flex:1; min-width:0; }
    @media (max-width: 800px) {
        .profil-wrap { flex-direction: column; }
    }
    @media (max-width: 500px) {
        .profil-kanan > div { flex-direction: column; }
    }
</style>

@include('partials.banner', ['title' => 'Profil Sekolah', 'subtitle' => 'Mengenal lebih dekat sejarah, visi, dan misi PAUD Al-Barokah.'])

<div class="profil-wrap">

    <div class="profil-kiri">
        <span style="display:inline-block; background:#e0e7ff; color:#1e40af; font-size:0.75rem; font-weight:600; padding:4px 12px; border-radius:20px; margin-bottom:0.8rem;">Sejarah Kami</span>
        <h2 style="color:#1e293b; font-size:1.4rem; margin-bottom:1rem;">Membangun Fondasi Masa Depan Sejak 2008</h2>
        <p style="line-height:1.7; color:#475569; margin-bottom:1rem;">
            PAUD Al-Barokah resmi didirikan pada tahun 2008 atas dasar kepedulian terhadap
            pendidikan anak usia dini. Kami percaya bahwa masa kanak-kanak adalah masa emas
            (golden age) yang membutuhkan bimbingan tepat agar mereka tumbuh menjadi generasi
            yang cerdas dan berakhlak mulia.
        </p>
        <p style="line-height:1.7; color:#475569; margin-bottom:1.5rem;">
            Berawal dari sebuah bangunan sederhana, kini PAUD Al-Barokah terus berkembang
            dan telah meluluskan banyak peserta didik yang siap melanjutkan pendidikan ke
            jenjang Sekolah Dasar dengan bekal karakter yang kuat.
        </p>

        <img src="{{ asset('images/sekolah.jpg') }}" style="width:100%; height:200px; object-fit:cover; border-radius:12px; margin-bottom:1.5rem;">

        <div style="background:white; border-radius:12px; padding:1.5rem; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
            <h3 style="color:#1e293b; margin-bottom:1rem; font-size:1rem;">Biodata Sekolah</h3>
            <table style="width:100%; font-size:0.9rem;">
                <tr>
                    <td style="padding:0.5rem 0; color:#94a3b8; width:35%;">Nama Sekolah</td>
                    <td style="padding:0.5rem 0; color:#1e293b; font-weight:600;">PAUD Al-Barokah</td>
                </tr>
                <tr>
                    <td style="padding:0.5rem 0; color:#94a3b8;">Tahun Berdiri</td>
                    <td style="padding:0.5rem 0; color:#1e293b; font-weight:600;">2008</td>
                </tr>
                <tr>
                    <td style="padding:0.5rem 0; color:#94a3b8;">Status</td>
                    <td style="padding:0.5rem 0; color:#1e293b; font-weight:600;">Swasta</td>
                </tr>
                <tr>
                    <td style="padding:0.5rem 0; color:#94a3b8;">Kepala Sekolah</td>
                    <td style="padding:0.5rem 0; color:#1e293b; font-weight:600;">Nama Kepala Sekolah</td>
                </tr>
                <tr>
                    <td style="padding:0.5rem 0; color:#94a3b8; vertical-align:top;">Alamat</td>
                    <td style="padding:0.5rem 0; color:#1e293b; font-weight:600;">Alamat lengkap sekolah</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="profil-kanan">
        <h2 style="color:#1e40af; font-size:1.2rem; margin-bottom:0.3rem; text-align:center;">Visi & Misi</h2>
        <p style="color:#64748b; font-size:0.85rem; margin-bottom:1.2rem; text-align:center;">Komitmen kami dalam mendidik generasi penerus bangsa.</p>

        <div style="display:flex; gap:1rem;">
            <div style="background:#1e3a8a; color:white; border-radius:12px; padding:1.3rem; flex:1; text-align:center;">
                <h3 style="margin-bottom:0.6rem; font-size:1rem;">Visi Kami</h3>
                <p style="font-size:0.82rem; line-height:1.6; opacity:0.9;">
                    "Terwujudnya anak usia dini yang cerdas, ceria, mandiri, dan memiliki
                    akhlak mulia sebagai fondasi generasi yang unggul."
                </p>
            </div>

            <div style="background:#1e40af; color:white; border-radius:12px; padding:1.3rem; flex:1;">
                <h3 style="margin-bottom:0.6rem; font-size:1rem; text-align:center;">Misi Kami</h3>
                <ol style="font-size:0.8rem; line-height:1.7; padding-left:1.1rem; opacity:0.9;">
                    <li>Menyelenggarakan pendidikan yang menyenangkan dan berpusat pada anak.</li>
                    <li>Membiasakan perilaku sopan dan nilai-nilai agama sejak dini.</li>
                    <li>Mengembangkan minat, bakat, dan kreativitas anak melalui bermain sambil belajar.</li>
                    <li>Menciptakan lingkungan sekolah yang aman, bersih, dan ramah anak.</li>
                </ol>
            </div>
        </div>
    </div>

</div>
@endsection