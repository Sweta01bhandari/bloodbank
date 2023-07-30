<?php

namespace App\Http\Controllers;

use App\Models\DonationRequest;
use App\Models\Donor;
use Auth;
use Illuminate\Http\Request;


class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::all();
         return view('donor.index', compact('donors'));
        
    }

    public function create()
    {
        return view('donor.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'mobile' => 'required',
        ]);

        // Create new donor
        $donor = Donor::create($validatedData);

        // Redirect to index page
        return redirect()->route('donor.index');
    }

    public function show($donor_id)
    {
        $donor = Donor::findOrFail($donor_id);
        return view('donor.show', compact('donor'));
    }

    public function edit(Donor $donor)
    {
        return view('donor.edit', compact('donor'));
    }

    public function update(Request $request, Donor $donor)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
           
            'mobile' => 'required',
        ]);

        // Update donor
        $donor->update($validatedData);

        return redirect()->route('donor.index', $donor->id);
    }

    public function destroy(Request $request)
    {
        $donor_id = $request->donor;
        $donor = Donor::findOrFail($donor_id);
        // Delete donor
        $donor->delete();

        return redirect()->route('donor.index');
    }

    // New methods for login functionality

    public function showLoginForm()
    {
        return view('donor.login');
    }

    public function login(Request $request)
    {
     
        $email = $request->input('email');
        $password = $request->input('password');
      

        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        $donor = Donor::where('email', $email)->first();
    
        if ($donor && ($password == $donor->password)) {
           
            
            return redirect()->route('donor.dashboard')->with('message', 'Login successful!');
        } else {
            
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }


    


    public function register(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:donors',
            'password' => 'required|min:8|confirmed',
            // Add other relevant fields here for registration
        ]);

        // Create a new Donor record in the database
        $donor = new Donor([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            // Set other relevant fields here
        ]);
        $donor->save();

       
        return redirect()->route('donor.dashboard');
    }

    public function showRegistrationForm()
    {
        return view('donor.register'); // Assuming you have a 'donor.registration' view file for the registration form
    }

    // Donation Request
    public function createDonationRequest(Request $request)
    {
        // Validate the input data for donation request
        $request->validate([
            'request_details' => 'required|string',
            // Add other relevant fields here for donation request
        ]);

        // Create a new DonationRequest record in the database
        $donationRequest = new DonationRequest([
            'donor_id' => auth()->user()->id, // Assuming you're using the built-in authentication system
            'request_details' => $request->input('request_details'),
            // Set other relevant fields here
        ]);
        $donationRequest->save();

        // Redirect to the donor dashboard or a thank-you page
        return redirect()->route('donor.dashboard');
    }
    public function dashboard()
{
    return view('donor.dashboard');
    if (Auth::check()) {
        // Donor is logged in, show donor dashboard
        $bloodDonatedUnits = 75;
        $totalRequestedUnits = 30;
        $totalPendingUnits = 5;
        $totalAcceptedUnits = 20;
        $totalRejectedUnits = 5;

        return view('donor.dashboard', compact(
            'bloodDonatedUnits',
            'totalRequestedUnits',
            'totalPendingUnits',
            'totalAcceptedUnits',
            'totalRejectedUnits'
        ));
    } else {
        // Donor is not logged in, redirect to the login page
        return redirect()->route('donor.login');
    }
}
}