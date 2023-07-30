@extends('layouts.dashboard_layout')

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

<div class="container">
  <div class="card">
      <div class="card-header">A</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units</p>
      </div>
  </div>

  <div class="card">
      <div class="card-header">B</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units:</p>
      </div>
  </div>

  <div class="card">
      <div class="card-header">A-</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units:</p>
      </div>
  </div>

  <div class="card">
      <div class="card-header">B+</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units:</p>
      </div>
  </div>

  
 
  <div class="card">
    <div class="card-header">B-</div>
    <div class="card-body">
        <p>Blood Available</p>
        <p>Total Units:</p>
    </div>
</div>

  <div class="card">
      <div class="card-header">AB+</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units:</p>
      </div>
  </div>

  <div class="card">
      <div class="card-header">AB-</div>
      <div class="card-body">
          <p>Blood Available</p>
          <p>Total Units:</p>
      </div>
  </div>
  <div class="card">
    <div class="card-header">AB-</div>
    <div class="card-body">
        <p>Blood Available</p>
        <p>Total Units:</p>
    </div>
</div>
<div class="card">
  <div class="card-header">AB-</div>
  <div class="card-body">
      <p>Blood Available</p>
      <p>Total Units:</p>
  </div>
</div>
<div class="card">
  <div class="card-header">AB-</div>
  <div class="card-body">
      <p>Blood Available</p>
      <p>Total Units:</p>
  </div>
</div>
</div>



@endsection

