@extends('layouts.app') <!-- Assuming you have a base layout defined -->

@section('content')
    <div class="container">
        <h1>Accept Donor Blood Donation Request</h1>
        <form action="{{ route('admin.acceptDonor') }}" method="POST">
            @csrf
            <input type="hidden" name="request_id" value="{{ $donationRequest->id }}">
            <h2>Donor Details:</h2>
            <p>Name: {{ $donationRequest->name }}</p>
            <p>Blood Group: {{ $donationRequest->blood_group }}</p>
            <p>Contact Number: {{ $donationRequest->contact_number }}</p>
            <!-- Add more donor details as required -->

            <h2>Accept or Reject?</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="accepted" id="acceptRadio" required>
                <label class="form-check-label" for="acceptRadio">
                    Accept
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
