<<<<<<< HEAD

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
=======
@extends('layouts.customers')

@section('content')
    <div class="container">
        <h1>Create a New Customer</h1>

        <form method="POST" action="{{ route('customers.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Customer</button>
        </form>
    </div>
@endsection
>>>>>>> 98d8f169e844d8f40c300c56e792a01e7204c8c1
