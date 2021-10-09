<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbarang extends Model
{
    protected $table = 'master_barang';
    protected $fillable = ["nama_barang", "harga_satuan"];
    use HasFactory;
}
