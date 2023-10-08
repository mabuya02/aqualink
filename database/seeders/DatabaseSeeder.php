<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\Seeders\NotificationSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $this->call(NotificationSeeder::class);
        
    }
}
