<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrasi_rumahsakitk5;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = registrasi_rumahsakitk5::all();
        return view('dokters.index', compact('dokters'));
    }
}
