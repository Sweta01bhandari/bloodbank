@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Stock Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Serial Number</th>
                    <td>{{ $stock->sn }}</td>
                </tr>
                <tr>
                    <th>Blood Group</th>
                    <td>{{ $stock->blood_group }}</td>
                </tr>
                <tr>
                    <th>Stock</th>
                    <td>{{ $stock->stock }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
