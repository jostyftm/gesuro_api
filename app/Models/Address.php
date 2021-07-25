<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes
     * 
     * @var array
     */
    protected $fillable = [
        'address',
        'neighborhood',
        'city_id'
    ];

    /**
     * Relationship with User
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'address_id');
    }

    /**
     * Relationship with City
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
     * Relationship with Phone
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class, 'address_id');
    }

    /**
     * Relationship with CompanyHeadquarter
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function headquarters(): HasMany
    {
        return $this->hasMany(CompanyHeadquarter::class, 'address_id');
    }
}
