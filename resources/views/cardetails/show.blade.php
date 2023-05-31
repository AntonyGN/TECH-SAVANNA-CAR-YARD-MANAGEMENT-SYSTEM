@extends('cardetails.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Car details</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Make : {{ $cardetails->make }}</h5>
        <p class="card-text">Model : {{ $cardetails->model }}</p>
        <p class="card-text">Fueltype : {{ $cardetails->fueltype }}</p>
        <p class="card-text">YearofManufacture : {{ $cardetails->yearofmanufacture }}</p>
        <p class="card-text">Transmission : {{ $cardetails->transmission }}</p>
        <p class="card-text">ChassisNo.: {{ $cardetails->chassisno }}</p>
        
                                        

       
  </div>
       
    </hr>
  
  </div>
</div>