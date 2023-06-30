@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="card">
        <div class="card-header">
          <h1>Vehiclesales</h1>
        </div>
        <div class="card-body">


          <div class="card-body">
            <h5 class="card-title">Make : {{ $vehiclesales->make }}</h5>
            <p class="card-text">Model : {{ $vehiclesales->model }}</p>
            <p class="card-text">Chassisno: {{ $vehiclesales->chassisno }}</p>
            <p class="card-text">YearofManufacture : {{ $vehiclesales->yearofmanufacture }}</p>
            <p class="card-text">Salesprice : {{ $vehiclesales->salesprice }}</p>
            <p class="card-text">Dateofsale : {{ $vehiclesales->dateofsale }}</p>
            <p class="card-text">Buyername: {{ $vehiclesales->buyername }}</p>
            <p class="card-text">buyersaddress: {{ $vehiclesales->buyersaddress }}</p>
            <p class="card-text">paymentmethod: {{ $vehiclesales->paymentmethod }}</p>
            <!-- <p class="card-text">comments: {{ $vehiclesales->comments }}</p> -->



          </div>

          </hr>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection