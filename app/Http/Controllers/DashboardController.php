<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Sementara, gunakan User sebagai pasien
        $jumlahPasien = User::count();
        // Jika ada model Pasien, ganti User::count() menjadi Pasien::count()

        // Placeholder, ganti dengan model Dokter dan Kunjungan jika sudah ada
        $jumlahDokter = 0;
        $jumlahKunjungan = 0;

        return view('dashboard', compact('jumlahPasien', 'jumlahDokter', 'jumlahKunjungan'));
    }
}
