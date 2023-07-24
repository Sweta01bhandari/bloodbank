

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patient Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $patient->name }}</p>
                <p><strong>Email:</strong> {{ $patient->email }}</p>
                <p><strong>Mobile:</strong> {{ $patient->mobile }}</p>
            
            </div>
        </div>
    </div>
@endsection
