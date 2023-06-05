
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                  <div class="card">
                    <div class="card-header"><h1>Car details</h1></div>
        
                          <div class="card-body">
                          <p class="card-text"><b>Make : </b>{{ $cardetails->make }}</p>
                          <p class="card-text"><b>Model :</b> {{ $cardetails->model }}</p>
                          <p class="card-text"><b>Fueltype :</b> {{ $cardetails->fueltype }}</p>
                          <p class="card-text"><b>YearofManufacture :</b> {{ $cardetails->yearofmanufacture }}</p>
                          <p class="card-text"><b>Transmission :</b> {{ $cardetails->transmission }}</p>
                          <p class="card-text"><b>ChassisNo.:</b> {{ $cardetails->chassisno }}</p>
                          
                     </div>                  
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
