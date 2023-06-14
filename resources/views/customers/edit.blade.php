@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div class="container">
    <div class="row">
        <div class="col-md-11">


            <div class="card">
                <div class="card-header">
                    <h1?>Customers Page</h1>
                </div>
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
                        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>

                </div>
            </div>



        </div>
    </div>
</div>
</div>
@endsection