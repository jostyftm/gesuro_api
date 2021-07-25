<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\CompanyHeadquarter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyHeadquarterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyHeadquarter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          =>  'pricipal',
            'address_id'    =>  Address::factory()->create()
        ];
    }
}
