@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="card">
        <div class="card-header">Vehiclesales Page</div>
        <div class="card-body">

          <form action="{{ url('vehiclesales/' .$vehiclesales->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$vehiclesales->id}}" id="id" />
            <label>Make</label></br>
            <input type="text" name="make" id="make" value="{{$vehiclesales->make}}" class="form-control"></br>
            <label>Model</label></br>
            <input type="text" name="model" id="model" value="{{$vehiclesales->model}}" class="form-control"></br>
            <label>Chassis no</label></br>
            <input type="text" name="chassisno" id="chassisno" value="{{$vehiclesales->chassisno}}" class="form-control"></br>
            <label>Year of manufacture</label></br>
            <input type="text" name="yearofmanufacture" id="yearofmanufacture" value="{{$vehiclesales->yearofmanufacture}}" class="form-control"></br>
            <label>Salesprice</label></br>
            <input type="text" name="salesprice" id="salesprice" value="{{$vehiclesales->salesprice}}" class="form-control"></br>
            <label>Dateofsale</label></br>
            <input type="text" name="dateofsale" id="dateofsale" value="{{$vehiclesales->dateofsale}}" class="form-control"></br>
            <label>Buyername</label></br>
            <input type="text" name="buyername" id="buyername" value="{{$vehiclesales->buyername}}" class="form-control"></br>
            <label>Buyersddress</label></br>
            <input type="text" name="buyersddress" id="cbuyersddress" value="{{$vehiclesales->buyersaddress}}" class="form-control"></br>
            <label>paymentmethod</label></br>
            <input type="text" name="paymentmethod" id="paymentmethod" value="{{$vehiclesales->paymentmethod}}" class="form-control"></br>
            <!-- <label>comments</label></br>
        <input type="text" name="comments" id="comments" value="{{$vehiclesales->comments}}" class="form-control"></br> -->
            <input type="submit" value="Update" class="btn btn-success"></br>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection