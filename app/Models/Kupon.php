<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'kupon_kode', 'jumlah'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';
}
