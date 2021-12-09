<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(100)->create();
            Post::factory(100)->create();
    }
}
