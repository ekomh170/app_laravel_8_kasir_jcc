@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Data Daftar Transaksi Pembelian Barang
@endsection
@section('content')
<a href="{{ url('transaksi-pembelian-barang/create') }}"><button type="button" class="btn btn-outline-primary"><i
            class="fas fa-plus-square"></i></button></a>
<a href="{{ url('pdf-transaksi-pembelian-barang') }}"><button type="button" class="btn btn-outline-danger"><i
            class="fas fa-file-pdf"></i></button></a>
<a href="{{ url('print-transaksi-pembelian-barang') }}"><button type="button" class="btn btn-outline-warning"><i
            class="fas fa-print"></i></button></a>
<a href="{{ url('excel-transaksi-pembelian-barang') }}"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-file-excel"></i></button></a>
<div class="h2 mb-3 text-center">Data Daftar Transaksi Pembelian Barang</div>

<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi Pembelian Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Total Akhir Transaksi Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nomor Total Akhir Transaksi Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tpembelianb as $item => $key)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $key->transaksi_pembelian_id }}</td>
                        <td>{{ $key->master_barang->nama_barang }}</td>
                        <td>{{ $key->jumlah }}</td>
                        <td>{{ $key->harga_satuan }}</td>
                        <td>{{ $key->harga_satuan * $key->jumlah }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td class="text-center">
                            <a href="/transaksi-pembelian-barang/{{$key->id}}" class="btn btn-outline-info"><i
                                    class="fas fa-eye"></i></a>
                            @auth
                            <a href="/transaksi-pembelian-barang/{{$key->id}}/edit" class="btn btn-outline-primary"><i
                                    class="far fa-edit"></i></a>
                            <form action="/transaksi-pembelian-barang/{{$key->id}}" method="POST" class="display-non">
                                @csrf
                                @method('DELETE')
                                <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>
                            @endauth
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
@endpush
@endsection
