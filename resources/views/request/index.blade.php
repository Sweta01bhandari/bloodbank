@extends('layouts.dashboard_layout')

@section('content')
<h1>Manage Blood Request</h1>
<table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Patient ID</th>
                <th>No. of Units</th>
                <th>Blood Group</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->sn}}</td>
                    <td>{{ $request->patient_id }}</td>
                    <td>{{ $request->no_units }}</td>
                    <td>{{ $request->blood_group }}</td>
                    <td>{{ $request->reason }}</td>
                    <td>{{ $request->status }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                        <a href="{{ route('request.edit', ['request' => $request->id]) }}" class="btn btn-primary btn-sm"><i class= "fa fa-edit"></i></a>

                     
                        <form method="post" action="{{ route('request.destroy', $request->id) }}">
                            @csrf
    
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
