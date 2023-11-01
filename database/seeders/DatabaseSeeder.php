<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use \App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();


        $personal = Category::create([
            "name" => 'Personal',
            "slug" => 'personal',
        ]);

        $work = Category::create([
            "name" => 'Work',
            "slug" => 'work',
        ]);

        $hobbies = Category::create([
            "name" => 'Hobbies',
            "slug" => 'hobbies',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati dolor officiis cumque, facere natus veritatis nostrum quo libero. Quasi, eius dignissimos accusamus quod ratione aperiam sed fuga quibusdam cum aliquid?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eligendi expedita rem amet animi pariatur, consequuntur delectus aut! Voluptatem aperiam nisi, tempora eveniet libero itaque facere voluptas maxime magnam ab.Quod illo eaque laborum provident consectetur non commodi maxime, quam quidem voluptas! Fugit, molestiae corporis, fugiat eligendi labore quisquam optio culpa ipsa, deserunt nemo distinctio sequi porro incidunt provident neque.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati dolor officiis cumque, facere natus veritatis nostrum quo libero. Quasi, eius dignissimos accusamus quod ratione aperiam sed fuga quibusdam cum aliquid?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eligendi expedita rem amet animi pariatur, consequuntur delectus aut! Voluptatem aperiam nisi, tempora eveniet libero itaque facere voluptas maxime magnam ab.Quod illo eaque laborum provident consectetur non commodi maxime, quam quidem voluptas! Fugit, molestiae corporis, fugiat eligendi labore quisquam optio culpa ipsa, deserunt nemo distinctio sequi porro incidunt provident neque.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-hobbies-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati dolor officiis cumque, facere natus veritatis nostrum quo libero. Quasi, eius dignissimos accusamus quod ratione aperiam sed fuga quibusdam cum aliquid?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eligendi expedita rem amet animi pariatur, consequuntur delectus aut! Voluptatem aperiam nisi, tempora eveniet libero itaque facere voluptas maxime magnam ab.Quod illo eaque laborum provident consectetur non commodi maxime, quam quidem voluptas! Fugit, molestiae corporis, fugiat eligendi labore quisquam optio culpa ipsa, deserunt nemo distinctio sequi porro incidunt provident neque.</p>',
        ]);
    }
}
