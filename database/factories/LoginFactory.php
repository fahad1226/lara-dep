<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Login>
 */
class LoginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ip_address'  => fake()->ipv4(),
            'login_at'    => fake()->dateTimeBetween($startDate = '-3 month', $endDate = 'now +6 month'),
        ];
    }
}
