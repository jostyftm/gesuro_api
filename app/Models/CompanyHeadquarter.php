<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Relationship with Company
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    /**
     * Relationship with Address
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
