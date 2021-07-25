<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cities = City::all()->pluck('id');

        return [
            'address'       =>  $this->faker->streetAddress(),
            'neighborhood'  =>  $this->fake->streetName(),
            'city_id'       =>  $cities->random()
        ];
    }
}
