<?php

namespace App\Http\Controllers;

use App\Models\Mbarang;
use Illuminate\Http\Request;

class MbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Mbarang::all();
        return view('master_barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_satuan' => 'required'
        ]);

        Mbarang::create([
            "nama_barang" => $request["nama_barang"],
            "harga_satuan" => $request["harga_satuan"]
        ]);

        return redirect('/master-barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Mbarang::find($id);
        return view('master_barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Mbarang::find($id);
        return view('master_barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_satuan' => 'required',
        ]);

        $barang = Mbarang::find($id);

        $data_barang = [
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
        ];

        $barang->update($data_barang);
        return redirect('/master-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Mbarang::find($id);
        $barang->delete();
        return redirect('/master-barang');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $barang = Mbarang::where('nama_barang', 'harga_satuan', $cari);

        // mengirim data pegawai ke view index
        return view('master_barang.index', compact('barang'));
    }
}