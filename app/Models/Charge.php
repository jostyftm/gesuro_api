<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Charge extends Model
{
    use HasFactory;
    
    /**
     *  Attributes
     * 
     * @var array 
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relationship with Employee
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'charge_id');
    }
}
