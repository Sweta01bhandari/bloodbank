@extends('layouts.dashboard_layout')

@section('content')
    <h1>Manage Donation Request</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Donation Id</th>
                <th>Donor Name</th>
                <th>Mobile No</th>
                <th>Blood Group</th>
                <th>No.of Units</th>
                <th>Disease</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->donation_id }}</td>
                    <td>{{ $donation->donor_name }}</td>
                    <td>{{ $donation->mobile_no }}</td>
                    <td>{{ $donation->blood_group }}</td>
                    <td>{{ $donation->no_units }}</td>
                    <td>{{ $donation->disease }}</td>
                    <td>{{ $donation->status }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                        <a href="{{ route('donation.edit', ['donation' => $donation->id]) }}" class="btn btn-primary btn-sm"><i class= "fa fa-edit"></i></a>

                     
                        <form method="post" action="{{ route('donation.destroy', $donation->id) }}">
                            @csrf
    
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
