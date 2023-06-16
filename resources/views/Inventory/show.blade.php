@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Inventory'])
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h1>Inventory</h1>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <h5 class="card-title">Cartype: {{ $inventory->cartype }}</h5>
                        <p class="card-text">Carmodel: {{ $inventory->carmodel }}</p>
                        <p class="card-text">Availablecars: {{ $inventory->availablecars }}</p>
                        <p class="card-text">Soldcars: {{ $inventory->soldcars }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection