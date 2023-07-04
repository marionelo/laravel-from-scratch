<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        $user = User::factory(10)->create();

        $personal = Category::create([
            "name" => "personal",
            "slug" => "personal"
        ]);

        $work = Category::create([
            "name" => "work",
            "slug" => "work"
        ]);

        $other = Category::create([
            "name" => "other",
            "slug" => "other"
        ]);

        Post::create([
            "user_id" => $user[0]->id,
            "category_id" => $personal->id,
            "title" => "mi primer post",
            "slug" => "mi-primer-post",
            "excerpt" => "asdlkjhaskd askldh ...",
            "body" => "sakjdhas kdjhask djashd kjashd kasjhd askjdh askjdh askjdh askjdh"
        ]);

        Post::create([
            "user_id" => $user[1]->id,
            "category_id" => $work->id,
            "title" => "mi segundo post",
            "slug" => "mi-segundo-post",
            "excerpt" => "asdlkjhaskd askldh ...",
            "body" => "sakjdhas kdjhask djashd kjashd kasjhd askjdh askjdh askjdh askjdh"
        ]);

        Post::create([
            "user_id" => $user[1]->id,
            "category_id" => $other->id,
            "title" => "mi tercer post",
            "slug" => "mi-tercer-post",
            "excerpt" => "asdlkjhaskd askldh ...",
            "body" => "sakjdhas kdjhask djashd kjashd kasjhd askjdh askjdh askjdh askjdh"
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
