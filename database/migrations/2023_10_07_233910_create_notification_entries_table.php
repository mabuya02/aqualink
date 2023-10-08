<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notification_entries', function (Blueprint $table) {
            $table->id('BigIncrements');
            // $table->unsignedBigInteger('user_id');
            $table->string('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();

           
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        DB::table('notification')->insert([
            'message' => 'Welcome to AquaLink!',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('notification')->insert([
            'message' => 'The water purity at Lake Victoria has drastically decreased. be carefull when swimming there.',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('notification')->insert([
            'message' => 'There has been a new species of fish discovered in Lake Victoria. Its called the Nile Perch.',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('notification')->insert([
            'message' => 'Do you know that there are 4 types of endagered species in Lake Victoria?',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('notification')->insert([
            'message' => 'There has been a new species of fish discovered in Lake Victoria. Its called the Nile Perch.',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('notification')->insert([
            'message' => 'Protect aquatic species :Limit Chemical Use: Minimize the use of pesticides and fertilizers in gardens to prevent runoff into water bodies',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('notification')->insert([
            'message' => 'Share Your Conservation Story!
            Have a success story or a tip for protecting aquatic species? Share it with our community in the app and inspire others!',
            'is_read' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_entries');
    }
};
