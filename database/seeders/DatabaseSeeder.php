<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use \App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create([
            "name" => "Bruno Vicente",
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
