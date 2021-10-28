<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Relationship CompanyTax
     * 
     * @return HasMany
     */
    public function companyTax(): HasMany
    {
        return $this->hasMany(Tax::class, 'taxt_id');
    }
}
