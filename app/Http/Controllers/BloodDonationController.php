<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodDonationController extends Controller
{
    public function index()
    {
        $bloodDonatedUnits = 5; // Define and assign a value to the variable
        // ... other data variables ...

        return view('donation.index', compact(
            'bloodDonatedUnits',
            // ... other data variables ...
        ));
    }
    // Private property to store the total donated units
    private $totalDonatedUnits = 0;

    public function showForm()
    {
        return view('blood.blood_donation_form');
    }

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
