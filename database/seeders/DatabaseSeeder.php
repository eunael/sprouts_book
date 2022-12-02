<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call([
            UsersAdminsSeeder::class,
        ]);

        \App\Models\User::factory(10)
            ->has(\App\Models\Sprout::factory()->count(2))
            ->create();
    }
}
