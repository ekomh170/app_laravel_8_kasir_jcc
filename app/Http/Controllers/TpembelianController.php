<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Tpembelian;
use Illuminate\Http\Request;
use App\Models\Tpembelianbarang;
use App\Exports\TpembelianExport;

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
        $pdf = PDF::loadview('transaksi_pembelian.pdf_detail', compact('tpembelian'));
        return $pdf->stream('transaksi_pembelian_detail.pdf');
    }

    public function print_detail($id)
    {
        $tpembelian = tpembelian::find($id);
        return view('transaksi_pembelian.print_detail', compact('tpembelian'));
    }

    public function excel()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new TpembelianExport, 'transaksi-pembelian.xlsx');
    }
}