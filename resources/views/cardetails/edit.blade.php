
@extends('cardetails.layout')
@section('content')
<div class="card">
  <div class="card-header">Car details Page</div>
  <div class="card-body">
      
      <form action="{{ url('cardetails/' .$cardetails->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cardetails->id}}" id="id" />
        <label>Make</label></br>
        <input type="text" name="make" id="make" value="{{$cardetails->make}}" class="form-control"></br>
        <label>Model</label></br>
        <input type="text" name="model" id="model" value="{{$cardetails->model}}" class="form-control"></br>
        <label>Fuel type</label></br>
        <input type="text" name="fueltype" id="fueltype" value="{{$cardetails->fueltype}}" class="form-control"></br>
        <label>Year of manufacture</label></br>
        <input type="text" name="yearofmanufacture" id="yearofmanufacture" value="{{$cardetails->yearofmanufacture}}" class="form-control"></br>
        <label>Transmission</label></br>
        <input type="text" name="transmission" id="transmission" value="{{$cardetails->transmission}}" class="form-control"></br>
        <label>Chassis No</label></br>
        <input type="text" name="chassisno" id="chassisno" value="{{$cardetails->chassisno}}" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop