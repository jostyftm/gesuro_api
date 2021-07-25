<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdentificationType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'prefix'
    ];

    /**
     * Relationships with User
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany 
     */
    public function users(): HasMany
    {   
        return $this->hasMany(User::class, 'identification_type_id');
    }
}
