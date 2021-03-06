<?php

namespace Database\Seeders;

use App\Models\Charge;
use Illuminate\Database\Seeder;

class ChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Charge::create(['name' => 'genrente']);
        Charge::create(['name' => 'asistente operativo']);
        Charge::create(['name' => 'asesor comercial']);
        Charge::create(['name' => 'contador']);
    }
}
