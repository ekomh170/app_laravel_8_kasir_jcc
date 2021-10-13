<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tpembelian extends Model
{
    protected $table = 'transaksi_pembelian';
    protected $fillable = ["total_harga"];
    use HasFactory;

    public function Tpembelianbarang()
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