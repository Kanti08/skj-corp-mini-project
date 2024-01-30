<?php

namespace App\Http\Controllers;

//use App\Models\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {

        return view('register');
    }

    // Process registration form
    public function register(StoreAuthRequest $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create new user
        $user = \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the user in after registration
        //Auth::login($user);

        // Redirect to user profile
        return redirect('/login');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

   // Process login form
    public function login(StoreAuthRequest $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/profile');
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }
//     public function login(StoreAuthRequest $request)
//    {
//         $credentials = $request->only('email', 'password');
//         $email = $request->input('email');
//         $password = $request->input('password');
//         $user=User::all();


//         if (Auth::attempt(['email' => $email, 'password' => $password])) {
//             return redirect()->intended('/profile');
//         }

//         return redirect('/login')->with('error', 'Invalid credentials');
//     }



    // Log the user out
    public function logout()
    {
        Auth::logout();

       return redirect('/');
    }

    // Show user profile
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}