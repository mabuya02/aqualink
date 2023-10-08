<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data you want to insert
        $users = [
            [
                'name' => 'Manasseh Maina',
                'email' => 'mainamanasseh02@gmail.com',
                'password' => Hash::make('password123'), // Hash the password
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Natasha Gichuhi',
                'email' => 'natashaguchuhi@gmail.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more users as needed
        ];

        // Insert the data into the 'users' table
        DB::table('users')->insert($users);
    }
}

        //

