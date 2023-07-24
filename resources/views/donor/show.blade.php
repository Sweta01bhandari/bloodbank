

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Donor Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $donor->name }}</p>
                <p><strong>Email:</strong> {{ $donor->email }}</p>
                <p><strong>Mobile:</strong> {{ $donor->mobile }}</p>
            
            </div>
        </div>
    </div>
@endsection
