@extends('usermanagement.layout')
@section('content')


<div class="card">
    <div class="card-header">User management</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $usermanagement->name }}</h5>
            <p class="card-text">Role : {{ $usermanagement->role }}</p>





        </div>

        </hr>

    </div>
</div>