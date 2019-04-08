<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'barang_name', 'price', 'information', 'stock', 'harga_beli', 'kupon_id', 'diskon_id', 'supplier_id', 'category_barang_id'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function category()
    {
        return $this->belongsTo(CategoryBarang::class);
    }
}