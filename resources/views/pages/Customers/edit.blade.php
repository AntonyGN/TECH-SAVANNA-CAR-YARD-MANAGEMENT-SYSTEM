@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
      
      <form action="{{ url('cutomers/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Name:</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control"></br>
        <label>Phonenumber</label></br>
        <input type="text" name="phonenumber" id="phonenumber" value="{{$customers->phonenumber}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop