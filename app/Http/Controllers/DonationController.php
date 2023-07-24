<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('donation.index', compact('donations'));
    }

    public function create()
    {
        return view('donation.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'donor_name' => 'required',
            'blood_group' => 'required',
            'no_units' => 'required|integer',
            'disease' => 'nullable',
            'status' => 'required',
        ]);

        Donation::create($validatedData);

        return redirect()->route('donation.index')->with('success', 'Donation created successfully.');
    }

    public function show(Donation $donation)
    {
        return view('donation.show', compact('donation'));
    }

    public function edit(Donation $donation)
    {
        return view('donation.edit', compact('donation'));
    }

    public function update(Request $request, Donation $donation)
    {
        $validatedData = $request->validate([
            'donor_name' => 'required',
            'blood_group' => 'required',
            'no_units' => 'required|integer',
            'disease' => 'nullable',
            'status' => 'required',
        ]);

        $donation->update($validatedData);

        return redirect()->route('donation.index')->with('success', 'Donation updated successfully.');
    }
}
