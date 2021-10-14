<?php

namespace App\Http\Controllers;

use App\Models\Tpembelian;
use Illuminate\Http\Request;
use PDF;

class TpembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpembelian = Tpembelian::all();
        return view('transaksi_pembelian.index', compact('tpembelian'));
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
        Tpembelian::create([
            "nama_barang" => $request["nama_barang"],
            "harga_satuan" => $request["harga_satuan"]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tpembelian = Tpembelian::find($id);
        return view('transaksi_pembelian.show', compact('tpembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpembelian = Tpembelian::find($id);
        return view('transaksi_pembelian.edit', compact('tpembelian'));
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
        $request->validate([
            'nama_barang' => 'required',
            'harga_satuan' => 'required',
        ]);

        // $barang = Mbarang::find($id);

        $data_barang = [
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
        ];

        // $barang->update($data_barang);
        // return redirect('/master-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpembelian = Tpembelian::find($id);
        $tpembelian->delete();
        return redirect('/transaksi-pembelian');
    }

    public function pdf()
    {
        $tpembelian = Tpembelian::all();
        $pdf = PDF::loadview('transaksi_pembelian.pdf', compact('tpembelian'));
        return $pdf->stream('transaksi_pembelian.pdf');
    }

    public function print()
    {
        $tpembelian = Tpembelian::all();
        return view('transaksi_pembelian.print', compact('tpembelian'));
    }

    public function pdf_detail($id)
    {
        $tpembelian = Tpembelian::find($id);
        return view('transaksi_pembelian.pdf_detail', compact('tpembelian'));
    }

    public function print_detail($id)
    {
        $Tpembelian = Tpembelian::find($id);
        return view('transaksi_pembelian.print_detail', compact('Tpembelian'));
    }
}