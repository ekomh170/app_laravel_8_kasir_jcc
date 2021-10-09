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
        return view('master_barang.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function show(Mbarang $mbarang)
    {
        return view('master_barang.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Mbarang $mbarang)
    {
        return view('master_barang.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mbarang $mbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mbarang $mbarang)
    {
        //
    }
}