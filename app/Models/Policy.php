<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'net_price',
        'total_price',
        'policy_state_id',
        'policy_validity_id',
        'company_service_id',
        'employee_id',
        'issued_at',
        'started_at',
        'finished_at'
    ];

    /**
     * Relationship PolicyState
     * 
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(PolicyState::class, 'policy_state_id');
    }

    /**
     * Relationship PolicyValidity
     * 
     * @return BelongsTo
     */
    public function validity(): BelongsTo
    {
        return $this->belongsTo(PolicyValidity::class, 'policy_validity_id');
    }

    /**
     * Relationship CompanyService
     * 
     * @return BelongsTo
     */
    public function companyService(): BelongsTo
    {
        return $this->belongsTo(CompanyService::class, 'company_service_id');
    }

    /**
     * Relationship Employee
     * 
     * @return BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    /**
     * Relationship Payment
     * 
     * @return HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'policy_id');
    }

    /**
     * Relationship Client
     * 
     * @return BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
