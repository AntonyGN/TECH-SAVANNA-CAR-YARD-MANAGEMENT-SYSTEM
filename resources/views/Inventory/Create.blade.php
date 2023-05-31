@extends('inventory.layout')
@section('content')
<div class="card">
  <div class="card-header">Car Inventory Page</div>
  <div class="card-body">
      
      <form action="/cars/store" method="post">
        {!! csrf_field() !!}
        <label>Car type</label></br>
        <input type="text" name="cartype" id="cartype" class="form-control"></br>
        <label>Car model</label></br>
        <input type="text" name="carmodel" id="carmodel" class="form-control"></br>
        <label>Available cars</label></br>
        <input type="text" name="availablecars" id="availablecars" class="form-control"></br>
        <label>Sold cars</label></br>
        <input type="text" name="soldcars" id="soldcars" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop