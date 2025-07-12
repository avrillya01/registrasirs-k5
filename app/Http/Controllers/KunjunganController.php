<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrasi_rumahsakitk5;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = registrasi_rumahsakitk5::all();
        return view('kunjungans.index', compact('kunjungans'));
    }

    public function create()
    {
        return view('kunjungans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'required',
            'dokter_spesialis' => 'required',
            'tanggal_berapa' => 'required|date',
            'jam_berapa' => 'required',
        ]);
        registrasi_rumahsakitk5::create($request->all());
        return redirect()->route('kunjungans.index')->with('success', 'Kunjungan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kunjungan = registrasi_rumahsakitk5::findOrFail($id);
        return view('kunjungans.edit', compact('kunjungan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokter' => 'required',
            'dokter_spesialis' => 'required',
            'tanggal_berapa' => 'required|date',
            'jam_berapa' => 'required',
        ]);
        $kunjungan = registrasi_rumahsakitk5::findOrFail($id);
        $kunjungan->update($request->all());
        return redirect()->route('kunjungans.index')->with('success', 'Kunjungan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $kunjungan = registrasi_rumahsakitk5::findOrFail($id);
        $kunjungan->delete();
        return redirect()->route('kunjungans.index')->with('success', 'Kunjungan berhasil dihapus!');
    }
}
