@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Edit car details</h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form action="{{ url('cardetails/' .$cardetails->id) }}" method="post">
                                        {!! csrf_field() !!}
                                        @method("PATCH")
                                        <input type="hidden" name="id" id="id" value="{{$cardetails->id}}" id="id" />
                                        <div class="form-group">
                                            <label for="make">Make</label>
                                            <input type="text" name="make" id="make" value="{{$cardetails->make}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="model">Model</label>
                                            <input type="text" name="model" id="model" value="{{$cardetails->model}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="fueltype">Fuel type</label>
                                            <input type="text" name="fueltype" id="fueltype" value="{{$cardetails->fueltype}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="yearofmanufacture">Year of manufacture</label>
                                            <input type="text" name="yearofmanufacture" id="yearofmanufacture" value="{{$cardetails->yearofmanufacture}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="transmission">Transmission</label>
                                            <input type="text" name="transmission" id="transmission" value="{{$cardetails->transmission}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="chassisno">Chassis No</label>
                                            <input type="text" name="chassisno" id="chassisno" value="{{$cardetails->chassisno}}" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="Save" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
