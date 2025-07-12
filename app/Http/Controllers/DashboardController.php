<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\registrasi_rumahsakitk5;

class DashboardController extends Controller
{
    public function index()
    {
        // Jumlah pasien dari User
        $jumlahPasien = User::count();
        // Jumlah dokter dari registrasi_rumahsakitk5 (asumsi nama_dokter unik)
        $jumlahDokter = registrasi_rumahsakitk5::distinct('nama_dokter')->count('nama_dokter');
        // Jumlah kunjungan dari registrasi_rumahsakitk5
        $jumlahKunjungan = registrasi_rumahsakitk5::count();

        return view('dashboard', compact('jumlahPasien', 'jumlahDokter', 'jumlahKunjungan'));
    }
}
