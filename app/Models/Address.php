<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes
     * 
     * @var array
     */
    protected $fillables = [
        'address',
        'neighborhood',
        'city_id',
        'user_id'
    ];
}
