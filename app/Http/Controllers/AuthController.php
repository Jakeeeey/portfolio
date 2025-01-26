<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'confirmed', 'min:3'],
        ]);

        // Register
        $user = User::create($fields);

        // Login
        // Auth::login is used to login the user directly without exemptions
        Auth::login($user);

        // Redirec
        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        // Validate
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to login the user
        // Auth::attempt is used specifically for login function because the 2nd parameter of it accepts the remember and its function is to remember the user
        // intended() is also used specifically for login when your going to redirect for a successful condition
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended('dashboard');
        }else{
            return back()->with('failed', 'The provided credentials do not match our records');
        }
    }

    public function logout(Request $request){
        // This is the correct way to logout the users all information
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
