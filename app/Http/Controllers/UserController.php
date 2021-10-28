<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    public function show($id)
    {
        return view('user.show', [
            'user' => User::findOrFail($id)
        ]);
    }
}
