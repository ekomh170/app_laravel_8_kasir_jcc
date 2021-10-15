<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumpulan Data PDF Transaksi Pembelian Barang</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .page-break {
            page-break-after: always;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th {
            color: white;
            background-color: rgb(0, 0, 0);
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <center>
        <h3>Kumpulan Data PDF Transaksi Pembelian Barang</h3>
        <hr style="width:75%">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div>
                <div style="overflow-x:auto;"">
                <table width=" 100%" cellspacing="0">
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
                        </tr>
                    </thead>
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
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>

</html>
