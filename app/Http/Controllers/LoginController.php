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

        $name = $request->name;
        $login_check = User::where('email', $name)->first();

        if ($login_check->role) {
            if ($login_check->role()->name == "donor") {
                $donations = $login_check->donations()->get();
                return redirect('donor/dashboard')->with('success', 'Login successful!');
                // Perform donor-specific logic using $donations if needed
            } elseif ($login_check->role()->name == "patient") {
                // $medicalRecords = $login_check->medicalRecords()->get();
                
                 return redirect('patient/dashboard')->with('success', 'Login successful!');
            } 
        
        }   else {
            return redirect('/dashboard')->with('success', 'Login successful!');
          

            
        }
    }
}
