@extends('customers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <!-- <h5 class="card-title">Name : {{ $customers->name }}</h5> -->
        <p class="card-text">Name : {{ $customers->name }}</p>
        <p class="card-text">Email : {{ $customers->email }}</p>
        <p class="card-text">Phonenumber : {{ $customers->phonenumber }}</p>

  </div>
       
    </hr>
  
  </div>
</div>