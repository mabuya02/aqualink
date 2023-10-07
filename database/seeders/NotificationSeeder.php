<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::factory(7)->create([
            'user_id' => 1, // Replace with the user ID to associate notifications with.
        ]); 
    }
}
