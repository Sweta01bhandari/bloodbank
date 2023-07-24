@extends('layouts.app')

@section('content')
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        width: 150px;
        height: 150px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    p {
        font-size: 14px;
        margin: 0;
        line-height: 1.4;
    }
</style>


{{-- <div class="container">
    <div class="card">
        <div class="card-header">Blood Donated</div>
        <div class="card-body">
            <p>Total Units: {{ $bloodDonatedUnits }}</p>
        </div>
    </div> --}}

<div class="container">
    <div class="card">
        <div class="card-header">Blood Donated</div>
        <div class="card-body">
            <p>Total Units</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Total Requested</div>
        <div class="card-body">
            <p>Total Units:</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header"> Pending Requests</div>
        <div class="card-body">
            <p>Total Units:</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Accepted Requests</div>
        <div class="card-body">
            <p>Total Units:</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Rejected Requests</div>
        <div class="card-body">
            <p>Total Units:</p>
        </div>
    </div>

   
</div>


@endsection
