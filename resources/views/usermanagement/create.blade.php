@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div class="card">
    <div class="card-header">User Management Page</div>
    <div class="card-body">

        <form action="{{ url('usermanagement') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Role</label></br>
            <input type="text" name="role" id="role" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop