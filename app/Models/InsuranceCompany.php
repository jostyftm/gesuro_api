<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InsuranceCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'website'
    ];

    /**
     * Relationship with CompanyService
     * 
     * @return belongsToMany
     */
    public function companyservices(): BelongsToMany
    {
        return $this->belongsToMany(
            CompanyService::class, 
            'company_insurance_services', 
            'insurance_company_id', 
            'company_service_id'
        )->withPivot('percentage', 'commission');
    }
}
