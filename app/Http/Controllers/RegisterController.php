<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function register(RegisterRequest $request)
    {
        User::query()->create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return redirect()->route("index");
    }
}
