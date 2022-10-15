<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $companies = collect(Company::all()->modelKeys());
        
        return [
            'name'        => fake()->company(),
            'location'    => fake()->address(),
            'company_id'  => $companies->random(),
        ];
    }
}
