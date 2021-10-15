<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumpulan Data Print Transaksi Pembelian</title>
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
        <h3>Detail Data Print Transaksi Pembelian</h3>
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
                            <th>Nomor Daftar Transaksi Barang</th>
                            <th>Total Harga Akhir dari daftar Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tpembelian as $item => $key)
                        <tr>
                            <td>{{ $item + 1 }}</td>
                            <td>{{ $key->total_harga  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
    <script>
        window.print()
    </script>
</body>

</html>
