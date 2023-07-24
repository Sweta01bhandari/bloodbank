@extends('layouts.dashboard_layout')

@section('content')

<a href="{{ route('donor.create') }}" class="btn btn-primary mt-5">Add Donor</a>
<h2>Donor Table</h2>

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
    @foreach ($donors as $donor)
    <tr>
      <td>{{ $donor->name }}</td>
      <td>{{ $donor->email }}</td>
     <td>{{ $donor->mobile }}</td>
      <td>
        <a href="/show/{{$donor->id}}" type="button" class="btn btn-primary btn-sm">View</a>
        <a href="{{ route('donor.edit', ['donor' => $donor->id]) }}" class="btn btn-primary btn-sm">Edit</a>
        <form method="POST" action="{{ route('donor.destroy', ['donor' => $donor->id]) }}" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection