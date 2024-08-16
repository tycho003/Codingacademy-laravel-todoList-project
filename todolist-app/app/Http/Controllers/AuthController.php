<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:8",
            "email" => "required|email|unique:users",
            "password" => "required|min:8",
            "password_confirmation" => "required|same:password",

        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect(route("login"))->with('success', 'User created successfully');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Auth::login();
            return redirect('/')->with('success', 'Login successfull');
        }

        return back()->with('error', 'Email or password is incorrect');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
