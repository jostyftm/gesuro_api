<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    /**
     * Attributes
     * 
     * @var array
     */
    protected $fillable = [
        'user_id',
        'occupation'
    ];

    /**
     * Relationship with User
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
