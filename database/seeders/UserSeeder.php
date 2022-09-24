<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = collect(Company::all()->modelKeys());
        $data = [];

        for ($i = 0; $i < 40000; $i++) {
            $data[] = [
                'name'              => fake()->name(),
                'email'             => fake()->unique()->email,
                'company_id'        => $companies->random(),
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token'    => Str::random(10),
            ];
        }

        foreach (array_chunk($data, 1000) as $chunk) {
            User::insert($chunk);
        }
    }
}
