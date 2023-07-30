@extends('layouts.app') <!-- Assuming you have a base layout defined -->

@section('content')
    <div class="container">
        <h1>Manage Blood Donation Requests</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Contact Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->blood_group }}</td>
                        <td>{{ $request->contact_number }}</td>
                        <td>{{ $request->status }}</td>
                        <td>
                            <a href="{{ route('admin.acceptRequest', $request->id) }}" class="btn btn-success">Accept</a>
                            <a href="{{ route('admin.rejectRequest', $request->id) }}" class="btn btn-danger">Reject</a>
                            <a href="{{ route('admin.deleteRequest', $request->id) }}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
