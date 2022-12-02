<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                "name" => 'Natanael Alves de Morais',
                "email" => 'natanael@gmail.com',
                "password" => bcrypt('garnet'),
                "is_admin" => true,
            ]
        );
    }
}
