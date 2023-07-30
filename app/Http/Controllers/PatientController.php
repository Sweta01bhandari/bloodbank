<?php

namespace App\Http\Controllers;


use App\Models\Patient;
use Auth;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', compact('patients'));
    }

   
    public function create()
    {
        return view('patient.create');
    }

    
    public function store(Request $request)
      {
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'nullable|email',

        'mobile_nu' => 'required',
    ]);

    $patient = Patient::create($validatedData);

    return redirect()->route('patient.index');
}

   
    public function show(Patient $patient)
{
    return view('patient.show', compact('patient'));
}

    
    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'mobile_nu' => 'required|integer',
    ]);

    $patient->update($validatedData);

    return redirect()->route('patient.index', $patient->id)
        ->with('success', 'Patient updated successfully.');
}

    
    public function destroy(Patient $patient)
{
    $patient->delete();

    return redirect()->route('patient.index')
        ->with('success', 'Patient deleted successfully.');
}

   
public function showLoginForm()
{
    return view('patient.login');
}

public function login(Request $request)
{
 
    $email = $request->input('email');
    $password = $request->input('password');

    // Validate the input data (you can add more validation rules as needed)
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Perform login logic here, such as checking credentials against a database
    $patient = Patient::where('email', $email)->first();
 

    if ($patient && password_verify($password, $patient->password)) {
       
        // Authentication successful
        
       
        // You can store the authenticated patient's information in the session or use Laravel's authentication mechanisms
        return redirect()->route('patient.dashboard')->with('message', 'Login successful!');
    } else {
        // Authentication failed
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }
}



public function register(Request $request)
{
    // Validate the input data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:PATIENTs',
        'password' => 'required|min:8|confirmed',
        // Add other relevant fields here for registration
    ]);

    // Create a new PATIENT record in the database
    $patient = new Patient([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        // Set other relevant fields here
    ]);
    $patient->save();

    return redirect()->route('patient.login')->with('success', 'Registration successful! Please log in.');
}

public function showRegistrationForm()
{
    return view('patient.register'); // Assuming you have a 'patient.registration' view file for the registration form
}


// public function createDonationRequest(Request $request)
// {
//     // Validate the input data for donation request
//     $request->validate([
//         'request_details' => 'required|string',
//         // Add other relevant fields here for donation request
//     ]);

//     // Create a new DonationRequest record in the database
//     $donationRequest = new PatientRequest([
//         'patient_id' => auth()->user()->id, // Assuming you're using the built-in authentication system
//         'request_details' => $request->input('request_details'),
//         // Set other relevant fields here
//     ]);
//     $donationRequest->save();

//     // Redirect to the patient dashboard or a thank-you page
//     return redirect()->route('patient.dashboard');
// }
// }
}
