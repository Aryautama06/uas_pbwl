<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pel_nama' => 'required',
            'alamat' => 'required',
        ]);

        // Buat instance objek Pelanggan
        $Pelanggan = new Pelanggan;
        
        // Set nilai atribut
        $Pelanggan->pel_nama = $request->pel_nama;
        $Pelanggan->alamat = $request->alamat;

        // Simpan objek ke dalam database
        $Pelanggan->save();

        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementasi tampilan detail jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::find($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pel_nama' => 'required',
            'alamat' => 'required',
        ]);

        $row = Pelanggan::findOrFail($id);

        $row->update([
            'pel_nama' => $request->pel_nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->delete();

        return redirect('pelanggan');
    }
}
