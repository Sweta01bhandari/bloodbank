@extends('layouts.app')

@section('content')
    <h1>Edit Donation</h1>
    <form action="{{ route('donations.update', $donation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add your donation edit form fields here -->
        <div>
            <label for="donor_name">Donor Name:</label>
            <input type="text" name="donor_name" id="donor_name" value="{{ $donation->donor_name }}" required>
        </div>
        <div>
            <label for="blood_group">Blood Group:</label>
            <input type="text" name="blood_group" id="blood_group" value="{{ $donation->blood_group }}" required>
        </div>
        <div>
            <label for="no_units">No. of Units:</label>
            <input type="number" name="no_units" id="no_units" value="{{ $donation->no_units }}" required>
        </div>
        <div>
            <label for="disease">Disease:</label>
            <input type="text" name="disease" id="disease" value="{{ $donation->disease }}">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" value="{{ $donation->status }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
