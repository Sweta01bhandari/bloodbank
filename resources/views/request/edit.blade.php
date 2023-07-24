@extends('layouts.app')

@section('content')
    <h1>Edit Request</h1>
    <form action="{{ route('request.update', $request->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add your request edit form fields here -->
        <div>
            <label for="patient_id">Patient ID:</label>
            <input type="text" name="patient_id" id="patient_id" value="{{ $request->patient_id }}" required>
        </div>
        <div>
            <label for="no_units">No. of Units:</label>
            <input type="number" name="no_units" id="no_units" value="{{ $request->no_units }}" required>
        </div>
        <div>
            <label for="blood_group">Blood Group:</label>
            <input type="text" name="blood_group" id="blood_group" value="{{ $request->blood_group }}" required>
        </div>
        <div>
            <label for="reason">Reason:</label>
            <input type="text" name="reason" id="reason" value="{{ $request->reason }}" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" value="{{ $request->status }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection

