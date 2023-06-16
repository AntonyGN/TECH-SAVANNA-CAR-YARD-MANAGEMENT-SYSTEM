@extends('vehiclesales.layout')
@section('content')


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