
@extends('customers.layout')
@section('content')
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
      
      <form action="/customers/store" method="post">
        {!! csrf_field() !!}
        <label>Fullname:</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Phone Number:</label></br>
        <input type="string" name="phonenumber" id="phonenumber" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop