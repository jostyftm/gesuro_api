<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyValidity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'amount_day'
    ];
}
