@extends('layouts.app')

@section('content')
    <h1>Donation Details</h1>
    <table>
        <tr>
            <th>ID:</th>
            <td>{{ $donation->id }}</td>
        </tr>
        <tr>
            <th>Donor Name:</th>
            <td>{{ $donation->donor_name }}</td>
        </tr>
        <tr>
            <th>Blood Group:</th>
            <td>{{ $donation->blood_group }}</td>
        </tr>
        <tr>
            <th>No. of Units:</th>
            <td>{{ $donation->no_units }}</td>
        </tr>
        <tr>
            <th>Disease:</th>
            <td>{{ $donation->disease }}</td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>{{ $donation->status }}</td>
        </tr>
    </table>
@endsection
