<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(20);

        if (request()->ajax()) {

            return response()->json([
                'users' => (string)view('users', compact('users')),
            ]);
        }

        return view('index',compact('users'));
    }
}
