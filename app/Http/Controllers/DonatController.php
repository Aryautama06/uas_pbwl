<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donat;

class DonatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Donat::all();
        return view('donat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_donat' => 'required',
            'harga' => 'required',
        ]);

        // Buat instance objek Donat
        $Donat = new Donat;
        
        // Set nilai atribut
        $Donat->nama_donat = $request->nama_donat;
        $Donat->harga = $request->harga;

        // Simpan objek ke dalam database
        $Donat->save();

        return redirect('donat');
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
        $row = Donat::find($id);
        return view('donat.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_donat' => 'required',
            'harga' => 'required',
        ]);

        $row = Donat::findOrFail($id);

        $row->update([
            'nama_donat' => $request->nama_donat,
            'harga' => $request->harga,
        ]);

        return redirect('donat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Donat::findOrFail($id);

        $row->delete();

        return redirect('donat');
    }
}
