<?php

namespace App\Http\Controllers;

use App\Models\Request as BloodRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create()
    {
        return view('request.create');
    }

    public function store(Request $request) // Use the fully qualified name for Illuminate\Http\Request
    {
        $validatedData = $request->validate([
            'sn' => 'required',
            'patient_id' => 'required',
            'no_units' => 'required|integer',
            'blood_group' => 'required',
            'reason' => 'required',
            'status' => 'required',
        ]);

        \App\Models\BloodRequest::create($validatedData);

        return redirect()->route('request.index')->with('success', 'Request created successfully.');
    }

    public function edit(\App\Models\BloodRequest $request) // Use the App\Models\Request class as the parameter type
    {
        return view('request.edit', compact('request'));
    }

    public function update(Request $request, \App\Models\BloodRequest $bloodRequest) // Use the fully qualified name for Illuminate\Http\Request
    {
        $validatedData = $request->validate([
            'sn' => 'required',
            'patient_id' => 'required',
            'no_units' => 'required|integer',
            'blood_group' => 'required',
            'reason' => 'required',
            'status' => 'required',
        ]);

        $bloodRequest->update($validatedData); // Use the App\Models\Request class to update the record

        return redirect()->route('request.show', ['request' => $bloodRequest->id])->with('success', 'Request updated successfully.');
    }

    public function show(\App\Models\BloodRequest $request) // Use the App\Models\Request class as the parameter type
    {
        return view('request.show', compact('request'));
    }

    public function index()
    {
        $requests = \App\Models\BloodRequest::all(); // Use the App\Models\Request class to get all records
        return view('request.index', compact('requests'));
    }
}
