<?php

namespace App\Http\Controllers;

use App\Models\Tpembelianbarang;
use App\Models\Mbarang;
use App\Models\Tpembelian;
use Illuminate\Http\Request;
use PDF;
// use \Barryvdh\DomPDF\PDF;


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
        return view('transaksi_pembelian_barang.index', compact('tpembelianb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpembelianb = TpembelianBarang::all();
        $tpembelian = Tpembelian::all();
        $barang = Mbarang::all();
        return view('transaksi_pembelian_barang.create', compact('tpembelianb', 'tpembelian', 'barang'));
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
            'transaksi_pembelian_id' => 'required',
            'nama_barang_id' => 'required',
            'jumlah' => 'required',
            'harga_satuan' => 'required',
        ]);

        // $barang = Mbarang::find($id);

        $TpembelianBarang = TpembelianBarang::create([
            "transaksi_pembelian_id" => $request["transaksi_pembelian_id"],
            "transaksi_pembelian_id" => $request["nama_barang_id"],
            "jumlah" => $request["jumlah"],
            "harga_satuan" => $request["harga_satuan"]
        ]);

        $total_harga = $request["jumlah"] * $request["harga_satuan"];
        $Tpembelian = Tpembelian::create([
            "total_harga" => $total_harga,
        ]);

        return $TpembelianBarang;
        return $Tpembelian;
        return redirect('/transaksi-pembelian-barang');
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
        $tpembelian = Tpembelian::all();
        $barang = Mbarang::all();
        return view('transaksi_pembelian_barang.index', compact('tpembelianb', 'tpembelian', 'barang'));
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
        $request->validate([
            'transaksi_pembelian_id' => 'required',
            'nama_barang_id' => 'required',
            'jumlah' => 'required',
            'c' => 'required',
        ]);

        $tpembelianb = TpembelianBarang::find($id);

        $tpembelianbarang = [
            'transaksi_pembelian_id' => $request->transaksi_pembelian_id,
            'nama_barang_id' => $request->nama_barang_id,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
        ];

        $tpembelianb->update($tpembelianbarang);
        return redirect('/transaksi-pembelian-barang');
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

    public function pdf()
    {
        $tpembelianb = TpembelianBarang::all();
        $pdf = PDF::loadview('transaksi_pembelian_barang.pdf', compact('tpembelianb'));
        return $pdf->stream('transaksi_pembelian_barang.pdf');
    }

    public function print()
    {
        $tpembelianb = TpembelianBarang::all();
        return view('transaksi_pembelian_barang.print', compact('tpembelianb'));
    }

    public function pdf_detail($id)
    {
        $tpembelianb = TpembelianBarang::find($id);
        $pdf = PDF::loadview('transaksi_pembelian_barang.pdf_detail', compact('tpembelianb'));
        return $pdf->stream('transaksi_pembelian_barang_detail.pdf');
    }

    public function print_detail($id)
    {
        $tpembelianb = TpembelianBarang::find($id);
        return view('transaksi_pembelian_barang.print_detail', compact('tpembelianb'));
    }
}