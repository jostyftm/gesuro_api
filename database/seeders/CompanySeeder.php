<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyHeadquarter;
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
        ->has(CompanyHeadquarter::factory(), 'headquarters')
        ->create();
    }
}
