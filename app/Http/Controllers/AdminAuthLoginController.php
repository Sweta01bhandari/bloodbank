<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminAuthLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login'); // Replace 'auth.admin-login' with the path to your administrator login form view.
    }

    protected function guard()
    {
        return \Auth::guard('admin'); // Return the admin guard for administrator authentication.
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/admin/login'); // Redirect to the administrator login page after logout.
    }
}
