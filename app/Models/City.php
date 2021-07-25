<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'province_id'
    ];

    /**
     * Relationships with Prvince
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province() : BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
