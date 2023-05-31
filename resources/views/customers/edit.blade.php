<<<<<<< HEAD
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
=======
@extends('layouts.customers')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $customer->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $customer->email }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" value="{{ $customer->phone }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <textarea name="address" id="address">{{ $customer->address }}</textarea>
        </div>
        <button type="submit">Update Customer</button>
    </form>
@endsection
>>>>>>> 98d8f169e844d8f40c300c56e792a01e7204c8c1
