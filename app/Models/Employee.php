<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    /**
     * Attributes
     * 
     * @var array
     */
    protected $fillable = [
        'user_id',
        'charge_id',
        'company_headquarter_id',
        'commission'
    ];

    /**
     * Relationship with User
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with Charge
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function charge(): BelongsTo
    {
        return $this->belongsTo(Charge::class, 'charge_id');
    }

    /**
     * Relationship with CompanyHeadQuarter
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function companyHeadquarter(): BelongsTo
    {
        return $this->belongsTo(CompanyHeadquarter::class, 'company_headquarter_id');
    }
}
