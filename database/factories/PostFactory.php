<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'        =>  fake()->name(),
            'body'         =>  fake()->text(50),
            'published_at' =>  fake()->dateTimeBetween($startDate = '-3 month', $endDate = 'now +6 month')
        ];
    }
}
