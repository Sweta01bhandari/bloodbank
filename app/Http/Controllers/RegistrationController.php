<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RegistrationController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        $roles=Role::all();
        return view('admin.register',compact('roles'));
    }

    /**
     * Handle the registration form submission.
     */
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Create a new user record
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Perform any additional actions, such as sending a confirmation email

        // Redirect to a success page or appropriate route
        return redirect('/login')->with('success', 'Registration successful!');
    }
}
