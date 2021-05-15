<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        //module artcle
        \App\Models\BlogCategory::factory(20)->create();
        \App\Models\Blog::factory(20)->create();
        \App\Models\Comment::factory(20)->create();
    }
}
