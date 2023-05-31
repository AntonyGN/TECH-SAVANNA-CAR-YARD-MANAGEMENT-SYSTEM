@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="card">
  <div class="card-header">Car details Page</div>
  <div class="card-body">
      
      <form action="/cars/store" method="post">
        {!! csrf_field() !!}
        <label>Make</label></br>
        <input type="text" name="make" id="make" class="form-control"></br>
        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>Fuel type</label></br>
        <input type="text" name="fueltype" id="fueltype" class="form-control"></br>
        <label>Year of manufacture</label></br>
        <input type="text" name="yearofmanufacture" id="yearofmanufacture" class="form-control"></br>
        <label>Transmission</label></br>
        <input type="text" name="transmission" id="transmission" class="form-control"></br>
        <label>Chassis No</label></br>
        <input type="text" name="chassisno" id="chassisno" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@endsection