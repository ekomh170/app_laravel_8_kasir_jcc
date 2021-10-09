<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpembelian extends Model
{
    protected $table = 'transaksi_pembelian';
    protected $fillable = ["total_harga"];
    use HasFactory;
}