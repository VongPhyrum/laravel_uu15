<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(PostSeeder::class);
        $this->call([
        CategorySeeder::class,
        TeacherSeeder::class,
        ProductSeeder::class,
    ]);
       User::firstOrCreate(
    ['email' => 'test@example.com'], // Check by email
    [
        'name' => 'Test User',
        'password' => bcrypt('password')
    ]
);
    }
}
