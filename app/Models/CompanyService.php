<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CompanyService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'company_id'
    ];

    /**
     * Relationship with InsuranceCompany
     * 
     * @return belongsToMany
     */
    public function companyservices(): BelongsToMany
    {
        return $this->belongsToMany(
            InsuranceCompany::class, 
            'company_insurance_services', 
            'company_service_id',
            'insurance_company_id' 
        )->withPivot('percentage', 'commission');
    }
}
