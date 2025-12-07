<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 User secara manual dengan username user1-user10
        for ($i = 1; $i <= 10; $i++) 
        {
            User::create([
                'name' => 'User ' . $i,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password'),
            ]);
        }
        User::factory(4)->create();
        // Membuat Category secara otomatis
        Category::create(['name' => 'Web Development']);
        Category::create(['name' => 'Personal']);

        // Membuat Post 50 secara otomatis (akan otomatis assign ke user dan category yang ada)
        Post::factory(10)->recycle(User::all())->recycle(Category::all())->create();
    }
}