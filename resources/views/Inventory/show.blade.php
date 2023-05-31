@extends('inventory.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Inventory</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Cartype : {{ $inventory->cartype }}</h5>
        <p class="card-text">Carmodel : {{ $inventory->carmodel }}</p>
        <p class="card-text">Availablecars : {{ $inventory->availablecars }}</p>
        <p class="card-text">Soldcars : {{ $inventory->soldcars }}</p>
       
        
                                        

       
  </div>
       
    </hr>
  
  </div>
</div>