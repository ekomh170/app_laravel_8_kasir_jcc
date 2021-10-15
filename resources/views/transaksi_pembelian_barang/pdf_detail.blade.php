<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF Detail Data Daftar Transaksi Pembelian Barang</title>
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
            <h4>PDF Detail Data Daftar Transaksi Pembelian Barang</h4>
            <div class="card-text"><b>Nomor Total Akhir Transaksi Barang</b> :
                {{ $tpembelianb->transaksi_pembelian_id }}
            </div>
            <div class="card-text"><b>Nama Barang</b> : {{ $tpembelianb->master_barang->nama_barang }}</div>
            <div class="card-text"><b>Jumlah</b> : {{ $tpembelianb->jumlah }}</div>
            <div class="card-text"><b>Harga Satuan</b> : {{ $tpembelianb->harga_satuan }}</div>
            <div class="card-text"><b>Harga Total</b> : {{ $tpembelianb->harga_satuan * $tpembelianb->jumlah }}</div>
            <div class="card-text"><b>Harga Dibuat</b> : {{ $tpembelianb->created_at }}</div>
            <div class="card-text"><b>Waktu Diupdate</b> : {{ $tpembelianb->updated_at }}</div>
        </div>
</body>

</html>
