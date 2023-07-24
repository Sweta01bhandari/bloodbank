@extends('layouts.dashboard_layout')

@section('content')

<a href="{{ route('patient.create') }}" class="btn btn-primary mt-5">Add patient</a>
<h2>patient Table</h2>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Mobile</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($patients as $patient)
    <tr>
      <td>{{ $patient->name }}</td>
      <td>{{ $patient->email }}</td>
      <td>{{ $patient->mobile_nu }}</td>
      <td>
        <a href="/show/{{$patient->id}}" type="button" class="btn btn-primary btn-sm">View</a>
        <a href="{{ route('patient.edit', ['patient' => $patient->id]) }}" class="btn btn-primary btn-sm">Edit</a>
        <form method="POST" action="{{ route('patient.destroy', ['patient' => $patient->id]) }}" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection