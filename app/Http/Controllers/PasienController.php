<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = User::all();
        return view('pasiens.index', compact('pasiens'));
    }
}
