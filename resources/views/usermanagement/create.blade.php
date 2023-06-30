@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div class="card">
    <div class="card-header">
        <h1>User Management Page</h1>
    </div>
    <div class="card-body">

        <form action="{{ url('usermanagement') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="username" id="username" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>
            <label>Password</label></br>
            <input type="text" name="password" id="password" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop