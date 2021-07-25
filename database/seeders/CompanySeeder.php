<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyHeadquarter;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
        ->has(
            CompanyHeadquarter::factory()
            ->has(Employee::factory()->count(5), 'employees'), 
            'headquarters'
        )
        ->create();
    }
}
