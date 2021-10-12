<?php

namespace App\Http\Controllers;

use App\Models\Tpembelianbarang;
use Illuminate\Http\Request;

class TpembelianbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpembelianb = TpembelianBarang::all();
        return view('transaksi_pembelian_barang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi_pembelian_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tpembelianb = TpembelianBarang::find($id);
        return view('transaksi_pembelian_barang.show', compact('tpembelianb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpembelianb = TpembelianBarang::find($id);
        return view('transaksi_pembelian_barang.index', compact('tpembelianb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TpembelianBarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpembelianb = TpembelianBarang::find($id);
        $tpembelianb->delete();
        return redirect('/transaksi-pembelian-barang');
    }
}