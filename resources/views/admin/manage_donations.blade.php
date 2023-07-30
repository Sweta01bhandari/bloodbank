@extends('layouts.app') <!-- Assuming you have a base layout defined -->

@section('content')
    <div class="container">
        <h1>Manage Blood Donations</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Donor Name</th>
                    <th>Mobile No</th>
                    <th>Blood Group</th>
                    <th>No. of Units</th>
                    <th>Disease</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->name }}</td>
                    <td>{{ $donation->contact_number }}</td>
                    <td>{{ $donation->blood_group }}</td>
                    <td>{{ $donation->num_units }}</td>
                    <td>{{ $donation->diseases ?: 'N/A' }}</td>
                    <td>{{ $donation->status }}</td>
                    <td>
                        <a href="{{ route('admin.showAcceptDonorForm', $donation->id) }}" class="btn btn-success">Accept</a>
                        <a href="{{ route('admin.showRejectDonorForm', $donation->id) }}" class="btn btn-danger">Reject</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
