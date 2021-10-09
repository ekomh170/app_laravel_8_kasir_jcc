<?php

namespace App\Http\Controllers;

use App\Models\Tpembelian;
use Illuminate\Http\Request;

class TpembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi_pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi_pembelian.create');
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
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Tpembelian $Tpembelian)
    {
        return view('transaksi_pembelian.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpembelian $Tpembelian)
    {
        return view('transaksi_pembelian.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpembelian $Tpembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpembelian $Tpembelian)
    {
        //
    }
}