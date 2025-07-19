<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importing the User model
use App\Models\User;
//importing the Auth facade for authentication
use Illuminate\Support\Facades\Auth;
//importing the Hash facade for hashing passwords
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
      return view('auth.login');

    }

     function loginPost(Request $request){
        // Handle login logic here
        // Validate the request, authenticate the user, etc.
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
            $remember = $request->has('remember'); // Check if remember me is checked

        if (Auth :: attempt($credentials)) {
            // Authentication passed
            return redirect()->intended(route('products'))->with('success', 'Login successful');
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid Email or Password');  
        }

    }

    function register(){
      return view('auth.register');

    }

     function registerPost(Request $request){
        // Handle registration logic here
        // Validate the request, create a new user, etc.
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|',
        ]);    

        // we already have a User model, so we can use it to create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash the password before saving
       if($user->save()){
            // Registration successful
            return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        } else {
            // Registration failed
            return back()->with('error', 'Registration failed. Please try again.');
        }
    }

     function signout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been signed out.');
    }


}
