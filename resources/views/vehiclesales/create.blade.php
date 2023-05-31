
@extends('vehiclesales.layout')
@section('content')
<div class="card">
  <div class="card-header">Vehiclesales Page</div>
  <div class="card-body">
      
  <form action="{{ url('vehiclesales') }}" method="post">
        {!! csrf_field() !!}
        <label>make</label></br>
        <input type="text" name="make" id="make" class="form-control"></br>
        <label>model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>chassis no</label></br>
        <input type="text" name="chassisno" id="chassisno" class="form-control"></br>
        <label>year of manufacture</label></br>
        <input type="text" name="yearofmanufacture" id="yearofmanufacture" class="form-control"></br>
        <label>salesprice</label></br>
        <input type="text" name="salesprice" id="salesprice" class="form-control"></br>
        <label>dateofsale</label></br>
        <input type="text" name="dateofsale" id="dateofsale" class="form-control"></br>
        <label>buyername</label></br>
        <input type="text" name="buyername" id="buyername" class="form-control"></br>
        <label>buyersddress</label></br>
        <input type="text" name="buyersddress" id="cbuyersddress" class="form-control"></br>
        <label>paymentmethod</label></br>
        <input type="text" name="paymentmethod" id="paymentmethod" class="form-control"></br>
        <!-- <label>comments</label></br>
        <input type="text" name="comments" id="comments" class="form-control"></br> -->
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop