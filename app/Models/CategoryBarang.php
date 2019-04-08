<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryBarang extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'category_barang_name',
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
