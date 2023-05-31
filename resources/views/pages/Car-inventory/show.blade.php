@extends('inventory.layout')
@section('content')
<div class="card">
  <div class="card-header">Inventory Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Car-type : {{ $inventory->Car-type }}</h5>
        <p class="card-text">Car-model : {{ $inventory->Car-model }}</p>
        <p class="card-text">Available-cars : {{ $inventory->Available-cars}}</p>
        <p class="card-text">Sold-cars : {{ $inventory->Sold-cars}}</p>
  </div>
      
    </hr>
  
  </div>
</div>