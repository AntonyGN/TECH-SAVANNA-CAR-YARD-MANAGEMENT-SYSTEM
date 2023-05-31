@extends('cardocuments.layout')
@section('content')
<div class="card">
  <div class="card-header">Documents Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Logbook : {{ $cardocuments->name }}</h5>
        <p class="card-text">Registration-document : {{ $cardocuments->address }}</p>
        <p class="card-text">Road-worthiness : {{ $cardocuments->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>