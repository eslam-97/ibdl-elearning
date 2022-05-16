<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('middle_name'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345'),
            'studentNum' => 30,
            'maxNum' => 1000 ,
        ];
    }
}
