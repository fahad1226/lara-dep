<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = collect(User::all()->modelKeys());
        $data = [];

        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'title'      =>  $this->faker->name(),
                'body'       =>  $this->faker->text(50),
                'user_id'    =>  $authors->random(),
            ];
        }

        # fatest way to seed may datas
        foreach (array_chunk($data, 100) as $chunk) {
            Post::insert($chunk);
        }
    }
}
