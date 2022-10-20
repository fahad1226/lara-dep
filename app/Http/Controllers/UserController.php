<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * We have used subquery concept here to minimize the unnecessary data loads while we eager load the logins model.
     * 
     */
    public function index()
    {
        $users = User::query()
            ->withLastLoginAt()
            ->with('company')
            ->orderBy('name')
            ->simplePaginate(30);
        return view('users.index', compact('users'));
    }
}
