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
        // 'migrate',
        // 'roles',
        // 'provinces',
        'cities',
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
}
