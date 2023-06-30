@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Add Car Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="/cars/store" method="post">
                                    @csrf
                                    <label>Make</label><br>
                                    <select name="make" id="make" class="form-control">
                                        <option value="">Select Make</option>
                                        @foreach($carMakes as $make)
                                            <option value="{{ $make }}">{{ $make }}</option>
                                        @endforeach
                                    </select><br>
                                    <label>Model</label><br>
                                    <input type="text" name="model" id="model" class="form-control"><br>
                                    <label>Fuel Type</label><br>
                                    <select name="fueltype" id="fueltype" class="form-control">
                                        <option value="">Select Fuel Type</option>
                                        @foreach($fuelTypes as $fuelType)
                                            <option value="{{ $fuelType }}">{{ $fuelType }}</option>
                                        @endforeach
                                    </select><br>
                                    <label>Year of manufacture</label><br>
                                    <select name="yearofmanufacture" id="yearofmanufacture" class="form-control">
                                        <option value="">Select Year</option>
                                        @foreach($years as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach
                                    </select><br>
                                    <label>Transmission</label><br>
                                    <select name="transmission" id="transmission" class="form-control">
                                        <option value="">Select Transmission</option>
                                        @foreach($transmissions as $transmission)
                                            <option value="{{ $transmission }}">{{ $transmission }}</option>
                                        @endforeach
                                    </select><br>
                                    <label>Chassis No</label><br>
                                    <input type="text" name="chassisno" id="chassisno" class="form-control"><br>
                                    <input type="submit" value="Save" class="btn btn-success"><br>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
