<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'nomor_penjualan', 'jumlah_barang', 'kupon_id', 'barang_id', 'customer_id'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';
}
