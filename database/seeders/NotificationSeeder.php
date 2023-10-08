<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $notifications = [
            [
                'message' => 'This is the first notification.',
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'This is the second notification.',
                'is_read' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ];

            DB::table('notification')->insert($notifications);

    }
}
