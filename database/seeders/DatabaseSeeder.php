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
        \App\Models\User::factory(1)->create([
            'email' => 'admin@admin.it',
            'is_admin' => true,
        ]); // Create dummy admin user
        
        \App\Models\User::factory(10)->create();
        \App\Models\Point::factory(10)->create();
        \App\Models\Service::factory(30)->create();
        \App\Models\Transaction::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
