<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Login;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(10000)
            ->has(Login::factory(10))
            ->has(Post::factory(3))
            ->has(Company::factory(1))
            ->create();
    }
}
