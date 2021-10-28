<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'tax_id',
        'value',
        'calculation_type'
    ];


    /**
     * Relationship with Company
     * 
     * @return BelongsTo
     */
    public function Company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    /**
     * Relationship Tax
     * 
     * @return BelongsTo
     */
    public function tax(): BelongsTo
    {
        return $this->belongsTo(Tax::class, 'taxt_id');
    }
}
