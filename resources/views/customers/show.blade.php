<<<<<<< HEAD
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
=======
@extends('layouts.customers')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Customer Management') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>{{ __('name') }}</td>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('email') }}</td>
                                    <td>{{ $customer->email }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('phone') }}</td>
                                    <td>{{ $customer->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
>>>>>>> 98d8f169e844d8f40c300c56e792a01e7204c8c1
