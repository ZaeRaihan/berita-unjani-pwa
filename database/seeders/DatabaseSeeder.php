<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);
        Category::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi'
        ]);
        Category::create([
            'name' => 'Pengabdian Pada Masyarakat',
            'slug' => 'pengabdian pada masyarakat'
        ]);

        Post::factory(500)->create();

        User::create([
            'name' => 'Admin',
            'username' => 'zaeraihan',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);
        User::create([
            'name' => 'Humas Unjani',
            'username' => 'humas',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);
    }
}
