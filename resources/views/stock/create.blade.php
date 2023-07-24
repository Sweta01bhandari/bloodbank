@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Stock</h1>
        <form method="POST" action="{{ route('stock.store') }}">
            @csrf
            <!-- Form fields go here -->
            <div class="form-group">
                <label for="sn">Serial Number:</label>
                <input type="text" name="sn" id="sn" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="blood_group">Blood Group:</label>
                <input type="text" name="blood_group" id="blood_group" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" name="stock" id="stock" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
