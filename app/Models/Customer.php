<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'name', 'email', 'nomor_telepon', 'alamat', 'status', 'kupon_id'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';
}
