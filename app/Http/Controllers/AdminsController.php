<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    /**
     * Show the admin panel dashboard view.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the admin login form.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Handle the admin login request.
     */
    public function login(Request $request)
    {
        // Authentication logic
    }

    /**
     * Logout the admin.
     */
    public function logout()
    {
        // Logout logic
    }

    /**
     * Show the admin registration form.
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    /**
     * Handle the admin registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
        ]);

        // Create a new admin record
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to the appropriate route after registration
        return redirect()->route('admin.dashboard');
    }
}
