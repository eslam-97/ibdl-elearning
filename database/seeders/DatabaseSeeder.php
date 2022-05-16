<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\student;
use App\Models\tracking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        client::factory()
            ->has(student::factory()->count(30)->has(tracking::factory()->count(1)))
            ->create();
    }
}
