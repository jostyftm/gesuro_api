<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\IdentificationType;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = IdentificationType::all()->pluck('id');

        return [
            'name'                      => $this->faker->name(),
            'last_name'                 => $this->faker->lastName(),
            'identification_type_id'    => $types->random(),
            'identification_number'     => $this->faker->randomNumber(5),
            'email'                     => $this->faker->unique()->safeEmail(),
            'email_verified_at'         => now(),
            'password'                  => bcrypt('password'),
            'address_id'                => Address::factory()->has(Phone::factory()->count(2), 'phones')->create(),
            'remember_token'            => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
