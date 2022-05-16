<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class trackingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'loggedIn_date' => date("Y/m/d"),
            'loggedOut_date' => date("Y/m/d"),
            'loggedIn_time' => date("h:i"),
            'loggedOut_time' => date("h:i"),
            'progress' => mt_rand(20,100),
            'totalHours' => mt_rand(1,20),
        ];
    }
}
