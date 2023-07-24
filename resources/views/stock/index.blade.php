@extends('layouts.app')

@section('content')
<a href="{{ route('stock.create') }}" class="btn btn-primary mt-5">Add Stock</a>

    <h2>stock Table</h2>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Serial Number</th>
                <th>Id</th>
                <th>Blood Group</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->sn }}</td>
                    <td>{{ $stock->id }}</td>
                    <td>{{ $stock->blood_group }}</td>
                    <td>{{ $stock->stock }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                        <a href="{{ route('stock.edit', ['stock' => $stock->id]) }}" class="btn btn-primary btn-sm"><i class= "fa fa-edit"></i></a>
                        <form method="POST" action="{{ route('stock.destroy', ['stock' => $stock->id]) }}" style="display: inline;">
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @endsection