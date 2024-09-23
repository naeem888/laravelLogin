<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){

        return view("auth.login");
    }

     function loginPost(Request $request){

        $request->validate([
            "email"=> "required",
            "password"=> "required",


        ]);
        $credentials = $request->only("email","password");
        if (Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error","login failed");
    }


     function register(){

        return view("auth.register");
    }


     function registerPost(Request $request){

        $request->validate([
            "fullname"=> "required",
            "email"=> "required",
            "password"=> "required",


        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()){

            return redirect(route("login"))->with("success","User created successfully");


        }
        return redirect(route("register"))->with("error","failed to create user account");

    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }

}
