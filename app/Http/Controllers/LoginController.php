<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Handle the registration form submission.
     */
    public function login(Request $request)
    {
       
     
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        // dd($validatedData);
        $name = $request->name;
        $login_check = User::where('email',$name)->first();


        if($login_check){
            return redirect('/dashboard')->with('success', 'Registration successful!');
        }else{
            return back()->with('error', 'login error!');
        }

    
      
    }
}

