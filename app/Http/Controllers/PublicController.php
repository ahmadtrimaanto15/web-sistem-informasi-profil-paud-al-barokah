<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Galeri;
use App\Models\Berita;

class PublicController extends Controller
{
    public function beranda()
    {
        $berita = Berita::latest()->take(3)->get();
        $galeriTerbaru = Galeri::latest()->take(6)->get();
        return view('public.beranda', compact('berita', 'galeriTerbaru'));
    }

    public function profil()
    {
        return view('public.profil');
    }

    public function guru()
    {
        $guru = Guru::all();
        return view('public.guru', compact('guru'));
    }

    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        return view('public.galeri', compact('galeri'));
    }

    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('public.berita', compact('berita'));
    }

    public function beritaDetail(Berita $berita)
    {
        return view('public.berita-detail', compact('berita'));
    }

    public function kontak()
    {
        return view('public.kontak');
    }
}