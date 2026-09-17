<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Galeri;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGuru = Guru::count();
        $totalGaleri = Galeri::count();
        $totalBerita = Berita::count();

        return view('admin.dashboard', compact('totalGuru', 'totalGaleri', 'totalBerita'));
    }
}