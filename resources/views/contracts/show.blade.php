@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="container">
  <div class="row">
    <div class="col-md-11">

      <div class="card">
        <div class="card-header">
          <h1>Contracts</h1>
        </div>
        <div class="card-body">


          <div class="card-body">
            <h5 class="card-title">Contractnumber: {{ $contracts->contractnumber }}</h5>
            <p class="card-text">Contracttype: {{ $contracts->contracttype }}</p>
            <p class="card-text">Date : {{ $contracts->date }}</p>
            <p class="card-text">Duration : {{ $contracts->duration }}</p>
            <p class="card-text">Contractterms : {{ $contracts->contractterms }}</p>
            <p class="Termination">Date : {{ $contracts->termination}}</p>
          </div>

          </hr>

        </div>
      </div>

    </div>
  </div>
</div>
</div>
@endsection