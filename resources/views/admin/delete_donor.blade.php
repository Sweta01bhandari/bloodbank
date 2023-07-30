@extends('layouts.app') <!-- Assuming you have a base layout defined -->

@section('content')
    <div class="container">
        <h1>Delete Blood Donation Request</h1>
        <form action="{{ route('admin.deleteRequest') }}" method="POST">
            @csrf
            <input type="hidden" name="request_id" value="{{ $donationRequest->id }}">
            <h2>Donor Details:</h2>
            <p>Name: {{ $donationRequest->name }}</p>
            <p>Blood Group: {{ $donationRequest->blood_group }}</p>
            <p>Contact Number: {{ $donationRequest->contact_number }}</p>
            <!-- Add more donor details as required -->

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
