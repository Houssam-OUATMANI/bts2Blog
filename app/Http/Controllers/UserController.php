<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


    public function handleLogin( LoginRequest $request)
    {
        $connected = Auth::attempt($request->validated());
        if($connected){
            session()->regenerate();
        }
        else {
            return redirect()->route("auth.login")->with("error", "Identifiant invalide");
        }

        return  redirect()->route("home")->with("success", "Connecté");
    }


    public function logout()
    {
        Auth::logout();
        return  redirect()->route("home")->with("success", "Deconnecte");
    }
}
