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
    public function show(Tpembelianbarang $tpembelianbarang)
    {
        return view('transaksi_pembelian_barang.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpembelianbarang $tpembelianbarang)
    {
        return view('transaksi_pembelian_barang.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpembelianbarang $tpembelianbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpembelianbarang  $tpembelianbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpembelianbarang $tpembelianbarang)
    {
        //
    }
}