@extends('cardocuments.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Cardocuments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <!-- <h5 class="card-title">Logbook : {{ $cardocuments->logbook }}</h5> -->
        <p class="card-text">Logbook : {{ $cardocuments->logbook }}</p>
        <p class="card-text">Registrationdocument : {{ $cardocuments->registrationdocument }}</p>
        <p class="card-text">Roadworthiness : {{ $cardocuments->roadworthiness }}</p>

  </div>
       
    </hr>
  
  </div>
</div>