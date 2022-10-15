<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect(User::all()->modelKeys());
        $data = [];

        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'name'        => fake()->company(),
                'location'    => fake()->address(),
                'user_id'     => $users->random(),
            ];
        }

        # fatest way to seed may datas
        foreach (array_chunk($data, 100) as $chunk) {
            Company::insert($chunk);
        }
    }
}
