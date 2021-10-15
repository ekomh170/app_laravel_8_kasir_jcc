<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang (PDF)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding in columns */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* this adds the "card" effect */
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Aplikasi Kasir</h2>
        <hr style="width:75%">
        <div class="card-body">
            <h4>Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang (PDF)</h4>
            @foreach ($tpembelian->transaksi_pembelian_barang as $item => $key)
            <h4 class="card-text"><b>Transaksi Pembelian {{ $item + 1  }}</b> : </h4>
            <ul>
                <li>
                    <h4 class="card-text"><b>Nama Barang</b> : {{ $key->master_barang->nama_barang }}</h4>
                </li>
                <li>
                    <h4 class="card-text"><b>Harga Satuan</b> : {{ $key->harga_satuan }}</h4>
                </li>
                <li>
                    <h4 class="card-text"><b>Jumlah Barang</b> : {{ $key->jumlah }}</h4>
                </li>
                <li>
                    <h4 class="card-text"><b>Jumlah Barang</b> : {{ $key->harga_satuan * $key->jumlah}}</h4>
                </li>
            </ul>
            @endforeach
            <h4>Total Harga : {{ $tpembelian->total_harga }}</h4>
        </div>
</body>

</html>
