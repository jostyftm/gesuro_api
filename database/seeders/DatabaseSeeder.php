<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeds attribute
     *
     *  @var array 
     */
    private $seeds = [
        'migrate',
        'roles',
        'provinces',
        'cities',
        'identificationTypes',
        'charges',
        'companies',
    ];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            $this->command->line("Processing {$seed}");
            call_user_func([$this, $seed]);
        }
    }

    /**
     * Refresh databases
     */
    public function migrate()
    {
        $this->command->call('key:generate');
        $this->command->call('migrate:refresh');
        $this->command->line('Migrated tables.');
    }

    /**
     * Seed Roles Table
     */
    public function roles()
    {
        $this->call(RoleSeeder::class);
    }
   
    /**
     * Seed Provinces Table
     */
    public function provinces()
    {
        $this->call(ProvinceSeeder::class);
    }
   
    /**
     * Seed Cities Table
     */
    public function cities()
    {
        $this->call(CitySeeder::class);
    }
   
    /**
     * Seed IdentificationTypes Table
     */
    public function identificationTypes()
    {
        $this->call(IdentificationTypeSeeder::class);
    }
   
    /**
     * Seed Users Table
     */
    public function users()
    {
        $this->call(UserSeeder::class);
    }
   
    /**
     * Seed Companies Table
     */
    public function companies()
    {
        $this->call(CompanySeeder::class);
    }
   
    /**
     * Seed Charges Table
     */
    public function charges()
    {
        $this->call(ChargeSeeder::class);
    }
}
