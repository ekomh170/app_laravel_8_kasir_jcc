<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPembelianBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pembelian_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_pembelian_id');
            $table->foreign('transaksi_pembelian_id')->references('id')->on('transaksi_pembelian');
            $table->unsignedBigInteger('master_barang_id');
            $table->foreign('master_barang_id')->references('id')->on('master_barang');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pembelian_barang');
    }
}