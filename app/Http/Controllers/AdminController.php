<?php
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BloodDonationRequest;
use App\Models\DonationRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin panel dashboard view.
    public function index()
    {
        return view('admin.dashboard');
    }

    // Show the admin login form.
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle the admin login request.
    public function login(Request $request)
    {
        // Authentication logic
    }

    // Logout the admin.
    public function logout()
    {
        // Logout logic
    }

    // Show the admin registration form.
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    // Handle the admin registration request.
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

    // Show all blood donation requests.
    public function showRequests()
    {
        $requests = BloodDonationRequest::all();
        return view('admin.requests', compact('requests'));
    }

    // Accept a blood donation request.
    public function acceptRequest($requestId)
    {
        $request = BloodDonationRequest::findOrFail($requestId);
        $request->update(['status' => 'accepted']);
        return redirect()->route('admin.requests')->with('success', 'Blood donation request accepted!');
    }

    // Reject a blood donation request.
    public function rejectRequest($requestId)
    {
        $request = BloodDonationRequest::findOrFail($requestId);
        $request->update(['status' => 'rejected']);
        return redirect()->route('admin.requests')->with('success', 'Blood donation request rejected!');
    }

    // Show the form to accept or reject a donor's request.
    public function showAcceptDonorForm($requestId)
    {
        $donationRequest = BloodDonationRequest::findOrFail($requestId);
        return view('accept_donor', compact('donationRequest'));
    }

    // Accept or reject a donor's request.
    public function acceptDonor(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'request_id' => 'required|numeric|exists:donation_requests,id',
        ]);

        // Find the donation request by ID
        $donationRequest = DonationRequest::findOrFail($validatedData['request_id']);

        // Update the status of the donation request to "accepted"
        $donationRequest->status = 'accepted';
        $donationRequest->save();

        // You can add any additional logic here, e.g., sending notifications, etc.

        return redirect()->back()->with('success', 'Donor request accepted successfully.');
    }

    // Show the form to accept a specific blood donation request.
    public function showAcceptRequestForm($requestId)
    {
        $donationRequest = BloodDonationRequest::findOrFail($requestId);
        return view('accept_request', compact('donationRequest'));
    }

    // Accept a specific blood donation request.
   

    // Reject a specific blood donation request.

 


    // Delete a specific blood donation request.
    public function deleteRequest(Request $request)
    {
        $request->validate([
            'request_id' => 'required|exists:blood_donation_requests,id',
        ]);

        $donationRequest = BloodDonationRequest::findOrFail($request->input('request_id'));
        $donationRequest->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Donation request deleted!');
    }

    // Show the form to delete a specific patient record.
    public function showDeletePatientForm($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        return view('delete_patient', compact('patient'));
    }

    // Delete a specific patient record.
    public function deletePatient(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
        ]);

        $patient = Patient::findOrFail($request->input('patient_id'));
        $patient->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Patient record deleted!');
    }

    // Show all blood donation requests for management.
    public function manageDonations()
    {
        $donations = BloodDonationRequest::all();
        return view('manage_donations', compact('donations'));
    }

    // Show all blood donation requests for management.
    public function manageRequests()
    {
        $requests = BloodDonationRequest::all();
        return view('manage_requests', compact('requests'));
    }
}
