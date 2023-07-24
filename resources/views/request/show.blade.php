@extends('layouts.app')

@section('content')
    <h1>Request Details</h1>
    <div>
        <p>Patient ID: {{ $request->patient_id }}</p>
        <p>No. of Units: {{ $request->no_units }}</p>
        <p>Blood Group: {{ $request->blood_group }}</p>
        <p>Reason: {{ $request->reason }}</p>
        <p>Status: {{ $request->status }}</p>
    </div>
@endsection
