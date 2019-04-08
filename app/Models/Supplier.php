<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    protected $fillable = [
        'name', 'email', 'nomor_telepon', 'contact_person', 'alamat'
    ];
    public $timestamps = true;
    protected $dateFormat = 'U';
}
