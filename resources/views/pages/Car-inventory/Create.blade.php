@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">inventory Page</div>
  <div class="card-body">
      
      <form action="{{ url('inventory') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="car-type" id="car-type" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="car-model" id="car-model" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="available-cars" id="available-cars" class="form-control"></br>
        <input type="text" name="sold-cars" id="sold-cars" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop