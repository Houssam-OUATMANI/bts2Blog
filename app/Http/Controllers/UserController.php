<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public  function  register() {
        return view("auth.register");
    }

    public  function  handleRegister(RegisterUserRequest $request) {

        User::query()->create([
            "firstname" => $request->validated("firstname"),
            "lastname" => $request->validated("lastname"),
            "email"  => $request->validated("email"),
            "password" => Hash::make( $request->validated("password"))
        ]);

        return redirect()->route("auth.login")->with("success", "Register success!!!");
    }



    public  function  login() {
        return view("auth.login");
    }
}
