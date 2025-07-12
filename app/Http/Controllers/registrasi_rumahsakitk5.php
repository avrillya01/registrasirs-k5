<?php

namespace App\Http\Controllers;

use App\Models\registrasi_rumahsakitk5;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class registrasi_rumahsakitk5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataArray = registrasi_rumahsakitk5::latest()->paginate(10);
        return view('registrasi_rumahsakitk5/index', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrasi_rumahsakitk5/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_dokter' => 'required|min:10',
            'dokter_spesialis' => 'required|min:5',
            'tanggal_berapa' => 'required|min:4',
            'jam_berapa' => 'required|min:4',
            ]);
    
            //create
            registrasi_rumahsakitk5::create([
                'nama_dokter' => $request->nama_dokter,
                'dokter_spesialis' => $request->dokter_spesialis,
                'tanggal_berapa' => $request->tanggal_berapa,
                'jam_berapa' => $request->jam_berapa,
            ]);
    
            //kembali ke index
            return redirect()->route('registrasi_rumahsakitk5.index')->with(['success' => 'data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = registrasi_rumahsakitk5::FindOrFail($id);
        return view('registrasi_rumahsakitk5/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = registrasi_rumahsakitk5::FindOrFail($id);
        return view('registrasi_rumahsakitk5/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_dokter' => 'required|min:10',
            'dokter_spesialis' => 'required|min:5',
            'tanggal_berapa' => 'required|min:4',
            'jam_berapa' => 'required|min:4',
            ]);
            $data = registrasi_rumahsakitk5::FindOrFail($id);
            
            //update
            $data->update([
                'nama_dokter' => $request->nama_dokter,
                'dokter_spesialis' => $request->dokter_spesialis,
                'tanggal_berapa' => $request->tanggal_berapa,
                'jam_berapa' => $request->jam_berapa,
            ]);
            
            //redirect
            return redirect()->route('registrasi_rumahsakitk5.index')->with(['success' => 'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage
     */
    public function destroy($id)
    {
        //get by id
        $data = registrasi_rumahsakitk5::FindOrFail($id);

        //hapus data
        $data ->delete();

        //redirect to index
        return redirect()->route('registrasi_rumahsakitk5.index')->with(['success' => 'data berhasil dihapus']);
    }
}
