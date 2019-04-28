<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'nomor_pembelian', 'keterangan_permintaan', 'jumlah_barang', 'barang_id'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';
}
