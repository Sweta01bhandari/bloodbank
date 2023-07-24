@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Stock</h1>
        <form method="POST" action="{{ route('stock.update', $stock->id) }}">
            @csrf
           
            <div class="form-group">
                <label for="sn">Serial Number:</label>
                <input type="text" name="sn" id="sn" class="form-control" value="{{ $stock->sn }}" required>
            </div>
            <div class="form-group">
                <label for="blood_group">Blood Group:</label>
                <input type="text" name="blood_group" id="blood_group" class="form-control" value="{{ $stock->blood_group }}" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" name="stock" id="stock" class="form-control" value="{{ $stock->stock }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
