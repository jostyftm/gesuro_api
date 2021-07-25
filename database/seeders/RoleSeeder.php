<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'    =>  'administrator']);
        Role::create(['name'    =>  'operational_assistant']);
        Role::create(['name'    =>  'commercial_advisor']);
        Role::create(['name'    =>  'client']);
    }
}
