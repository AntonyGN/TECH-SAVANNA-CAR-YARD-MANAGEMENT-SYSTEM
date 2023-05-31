@extends('contracts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contracts</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Contractnumber: {{ $contracts->contractnumber }}</h5>
        <p class="card-text">Contracttype: {{ $contracts->contracttype }}</p>
        <p class="card-text">Date : {{ $contracts->date }}</p>
        <p class="card-text">Duration : {{ $contracts->duration }}</p>
        <p class="card-text">Contractterms : {{ $contracts->contractterms }}</p>
        <p class="Termination">Date : {{ $contracts->termination}}</p>
  </div>
       
    </hr>
  
  </div>
</div>