<?php

namespace App\Http\Controllers;

use App\Models\BloodDonationRequest; 
use Illuminate\Http\Request;



class BloodDonationController extends Controller
{
    // ... Other methods ...

    public function storeRequest(Request $request)
    {
        // Validation (You can add validation rules here)
        $validatedData = $request->validate([
            'donor_name' => 'required|string|max:255',
            'blood_group' => 'required|string|max:5',
            'no_units' => 'required',
            'disease' => 'required',
            'status' => 'required',
            // Add more fields as required
        ]);

        BloodDonationRequest::create([
            'donor_name' => $validatedData['donor_name'], 
            'blood_group' => $validatedData['blood_group'], 
            'no_units' => $validatedData['no_units'], 
            'disease' => $validatedData['disease'], 
            'status' => 'pending',
            
        ]);

        return redirect()->route('blood-donation.form')->with('success', 'Blood donation request submitted successfully!');
    }

    public function showForm()
    {
        // Return the view for the blood donation form
        return view('blood.blood_donation_form');
    }
    // Private property to store the total donated units
    private $totalDonatedUnits = 0;

    public function submitForm(Request $request)
    {
        // Validation (You can add validation rules here)
        $validatedData = $request->validate([
            'blood_group' => 'required',
            'num_units' => 'required|numeric|min:1',
            'diseases' => 'nullable|string|max:255',
        ]);

        // Call the private method to update the total donated units
        $this->updateTotalDonatedUnits($validatedData['num_units']);

        return redirect()->route('donor.dashboard')->with([
            'validatedData' => $validatedData,
            'totalDonatedUnits' => $this->totalDonatedUnits,
        ]);
    }

    // Private method to update the total donated units
    private function updateTotalDonatedUnits($numUnits)
    {
        // Assuming the number of units donated is passed as an argument
        $this->totalDonatedUnits += $numUnits;
    }
}
