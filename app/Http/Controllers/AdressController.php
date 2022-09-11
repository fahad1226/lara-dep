<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;

class AdressController extends Controller
{
    public function index()
    {
        $address = Address::with('user')->get();
        $users = User::with('addresses')->get();
        return view('address.index', compact('address', 'users'));
    }

    public function create()
    {
        $user = User::all();


        $user[0]->addresses()->create([
            'name' => 'China'
        ]);

        $user[0]->addresses()->create([
            'name' => 'USA'
        ]);

        // Address::create([
        //     'user_id' => 1,
        //     'name' => 'Bangladesh'
        // ]);

        // Address::create([
        //     'user_id' => 2,
        //     'name' => 'India'
        // ]);

        // Address::create([
        //     'user_id' => 3,
        //     'name' => 'Pakistan'
        // ]);

        // Address::create([
        //     'user_id' => 4,
        //     'name' => 'Srilanka'
        // ]);
    }
}
