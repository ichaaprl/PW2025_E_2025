<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 5 User secara manual dengan username user1-user5
        for ( $i = 1; $i <= 5; $i++ )
        {
            User::create([
                'name' => 'User ' . $i,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password'),
            ]);
        }
        
        // Membuat 2 Category secara otomatis tanpa bergantung pada model Category yang tidak ada
        DB::table('categories')->insert([
            [
                'name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Ambil id category yang dibuat
// Ambil id category yang dibuat
$categoryIds = DB::table('categories')->pluck('id')->all();

// Membuat 10 Post secara otomatis dan assign ke user serta category yang ada
$users = User::all();
for ($i = 0; $i < 10; $i++) {
    $title = 'Post Title ' . ($i + 1);
    DB::table('posts')->insert([
        'title' => $title,
        'slug' => 'post-' . ($i + 1),
        'excerpt' => 'Excerpt for ' . $title,
        'body' => 'Dummy body content for ' . $title,
        'user_id' => $users->random()->id,
        'category_id' => $categoryIds[array_rand($categoryIds)],
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}

}
}