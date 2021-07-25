<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyHeadquarter extends Model
{
    use HasFactory;

    /**
     * Attributes
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'company_id',
        'address_id'
    ];
}
