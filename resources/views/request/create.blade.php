@extends('layouts.app')

@section('content')
    <h1>Create Request</h1>
    <form action="{{ route('request.store') }}" method="POST">
        @csrf
        <!-- Add your request creation form fields here -->
        <div>
            <label for="patient_id">Patient ID:</label>
            <input type="text" name="patient_id" id="patient_id" required>
        </div>
        <div>
            <label for="no_units">No. of Units:</label>
            <input type="number" name="no_units" id="no_units" required>
        </div>
        <div>
            <label for="blood_group">Blood Group:</label>
            <input type="text" name="blood_group" id="blood_group" required>
        </div>
        <div>
            <label for="reason">Reason:</label>
            <input type="text" name="reason" id="reason" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
