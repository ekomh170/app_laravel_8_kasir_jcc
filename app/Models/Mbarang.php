<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Mbarang extends Model
{
    protected $table = 'master_barang';
    protected $fillable = ["nama_barang", "harga_satuan"];
    use HasFactory;

    public function transaksi_pembelian_barang()
    {
        return $this->hasMany('App\Models\Tpembelianbarang');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i:s');
    }
}