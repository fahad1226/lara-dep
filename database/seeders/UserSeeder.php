<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Login;
use App\Models\User;
use Carbon\Factory;
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

        // $companies = collect(Company::all()->modelKeys());

        for ($i = 0; $i < 1000; $i++) {

            $data = [
                'name'              => fake()->name(),
                'email'             => fake()->unique()->email,
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token'    => Str::random(10),
            ];

            // User::create($data)->logins()->create([
            //     'ip_address'  => fake()->ipv4(),
            //     'login_at'    => fake()->dateTimeBetween($startDate = '-3 month', $endDate = 'now +6 month'),
            // ]);
        }

        # fatest way to seed may datas
        foreach (array_chunk($data, 1000) as $chunk) {
            User::create($chunk)->logins()->create([
                'ip_address'    => fake()->ipv4(),
                'created_at'    => fake()->dateTimeBetween($startDate = '-3 month', $endDate = 'now +6 month'),
            ]);
        }
    }
}
