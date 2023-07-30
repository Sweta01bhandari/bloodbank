@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Create Patient</h1>

    <form action="{{ route('patient.store') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" required>
            </div>
        </div>
       </div>

        <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
            <div class="col-sm-10">
                <input type="text" name="mobile_nu" id="mobile_nu" class="form-control" placeholder="Enter your mobile" required>
            </div>
        </div>
         <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
</div>
@endsection
