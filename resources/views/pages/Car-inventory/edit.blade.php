@extends('inventory.layout')
@section('content')
<div class="card">
  <div class="card-header"> Inventory Page</div>
  <div class="card-body">
      
      <form action="{{ url('inventory/' .$inventory->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$inventory->id}}" id="id" />
        <label>Car-type</label></br>
        <input type="text" name="car-type" id="car-type" value="{{$inventory->car-type}}" class="form-control"></br>
        <label>Car-model</label></br>
        <input type="text" name="car-model" id="car-model" value="{{$inventory->car-model}}" class="form-control"></br>
        <label>Available-cars</label></br>
        <input type="text" name="available-cars" id="availabe-cars" value="{{$inventory->available-cars}}" class="form-control"></br>
        <label>Sold-cars</label></br>
        <input type="text" name="sold-cars" id="sold-cars" value="{{$inventory->sold-cars}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop