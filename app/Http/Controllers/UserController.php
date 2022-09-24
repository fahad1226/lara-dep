<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->with('company')
            ->orderBy('name')
            ->simplePaginate();
        return view('users.index', compact('users'));
    }
}
