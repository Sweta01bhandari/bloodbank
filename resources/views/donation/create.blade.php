@extends('layouts.app')

@section('content')
    <h1>Create Donation</h1>
    <form action="{{ route('donations.store') }}" method="POST">
        @csrf
        <!-- Add your donation creation form fields here -->
        <div>
            <label for="donor_name">Donor Name:</label>
            <input type="text" name="donor_name" id="donor_name" required>
        </div>
        <div>
            <label for="blood_group">Blood Group:</label>
            <input type="text" name="blood_group" id="blood_group" required>
        </div>
        <div>
            <label for="no_units">No. of Units:</label>
            <input type="number" name="no_units" id="no_units" required>
        </div>
        <div>
            <label for="disease">Disease:</label>
            <input type="text" name="disease" id="disease">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
