<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\registrasi_rumahsakitk5;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahUser = User::count();
        $jumlahDokter = registrasi_rumahsakitk5::distinct('nama_dokter')->count('nama_dokter');
        $jumlahKunjungan = registrasi_rumahsakitk5::count();
        return view('admin.dashboard', compact('jumlahUser', 'jumlahDokter', 'jumlahKunjungan'));
    }
}
