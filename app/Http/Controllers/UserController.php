<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view("profile", compact("user"));
    }

    public function update(Request $request, $id)
    {
        $user = User::query()->find($id);
        $user->update($request->all());

        return redirect()->route("index");
    }
}
