@extends('layouts.app') <!-- Assuming you have a base layout defined -->

@section('content')
    <div class="container">
        <h1>Delete Patient Record</h1>
        <form action="{{ route('admin.deletePatient') }}" method="POST">
            @csrf
            <input type="hidden" name="patient_id" value="{{ $patient->id }}">
            <h2>Patient Details:</h2>
            <p>Name: {{ $patient->name }}</p>
            <p>Age: {{ $patient->age }}</p>
            <!-- Add more patient details as required -->

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection

