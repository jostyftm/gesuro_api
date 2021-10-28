<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'policy_id',
        'payment_state_id',
        'payment_method_id',
        'paymented_at'
    ];

    /**
     * Relationship with Policy
     * 
     * @return BelongsTo
     */
    public function policy():BelongsTo
    {
        return $this->belongsTo(Policy::class, 'policy_id');
    }

    /**
     * Relationship with PolicyState
     * 
     * @return BelongsTo
     */
    public function state():BelongsTo
    {
        return $this->belongsTo(PolicyState::class, 'policy_state_id');
    }

    /**
     * Relationship with PolicyMethod
     * 
     * @return BelongsTo
     */
    public function method():BelongsTo
    {
        return $this->belongsTo(PolicyMethod::class, 'policy_method_id');
    }
}
