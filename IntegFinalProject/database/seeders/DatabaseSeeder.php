<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        \App\Models\RoomModel::factory(3)->create([
            'RoomName' => fake()->name(),
        ]);
    }
}
