<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Donat;
use App\Models\Pelanggan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Penjualan::with('donat','pelanggan')->get();
        return view('penjualan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $donats = Donat::select('id', 'nama_donat')->get();
        $pelanggans = Pelanggan::select('id', 'pel_nama')->get();

        return view('penjualan.create', compact('donats', 'pelanggans'))->with('title', 'Tambah pelanggan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'donat_id' => $request->donat_id,
            'pel_id' => $request->pel_id,
        ];

        // dd($data);
        Penjualan::create($data);

        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Penjualan::find($id);
        return view('penjualan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Penjualan::findOrFail($id);

        $row->update([
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'donat_id' => $request->donat_id,
            'pel_id' => $request->pel_id,
        ]);

        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penjualan::findOrFail($id);

        $row->delete();

        return redirect('penjualan');
    }
}
