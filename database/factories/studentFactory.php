<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('first_name'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345'),
            'logbook' => 'PQP'.mt_rand(111111,999999),
        ];
    }
}
