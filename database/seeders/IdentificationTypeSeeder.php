<?php

namespace Database\Seeders;

use App\Models\IdentificationType;
use Illuminate\Database\Seeder;

class IdentificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        IdentificationType::create([
            'name'  =>  'Cedula de ciudadania',
            'prefix'  =>  'c.c'
        ]);

        IdentificationType::create([
            'name'  =>  'Tarjeta de identidad',
            'prefix'  =>  't.i'
        ]);

        IdentificationType::create([
            'name'  =>  'Registro civil',
            'prefix'  =>  'r.c'
        ]);
    }
}
