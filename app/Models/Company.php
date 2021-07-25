<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    /**
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'nit',
        'email',
        'sitio_web',
        'avatar'
    ];

    /**
     * Relationship with CompanyHeadquarter
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function headquarters(): HasMany
    {
        return $this->hasMany(CompanyHeadquarter::class, 'company_id');
    }

}
