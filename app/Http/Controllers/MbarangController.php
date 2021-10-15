<?php

namespace App\Http\Controllers;

use App\Models\Mbarang;
use App\Exports\MbarangExport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

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

        Alert::success('Berhasil', 'Menambahkan Data Barang');
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
        Alert::success('Berhasil', 'Mengubah Data Barang');
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
        Alert::success('Berhasil', 'Menghapus Data Barang');
        return redirect('/master-barang');
    }

    public function pdf()
    {
        $barang = Mbarang::all();
        $pdf = PDF::loadview('master_barang.pdf', compact('barang'));
        return $pdf->stream('master_barang.pdf');
    }

    public function print()
    {
        $barang = Mbarang::all();
        return view('master_barang.print', compact('barang'));
    }

    public function pdf_detail($id)
    {
        $barang = Mbarang::find($id);
        $pdf = PDF::loadview('master_barang.pdf_detail', compact('barang'));
        return $pdf->stream('master_barang_detail.pdf');
    }

    public function print_detail($id)
    {
        $barang = Mbarang::find($id);
        return view('master_barang.print_detail', compact('barang'));
    }

    public function excel()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new MbarangExport, 'master-barang.xlsx');
    }
    // public function cari(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari table pegawai sesuai pencarian data
    //     $barang = Mbarang::where('nama_barang', 'harga_satuan', $cari);

    //     // mengirim data pegawai ke view index
    //     return view('master_barang.index', compact('barang'));
    // }
}