@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Car Documents'])

    <div class="card">
    <div class="card">
    <div class="card-header"><h2>Car documents Page</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <!-- <h5 class="card-title">Logbook : {{ $cardocuments->logbook }}</h5> -->
        <p class="card-text">Logbook : {{ $cardocuments->logbook }}</p>
        <p class="card-text">Registrationdocument : {{ $cardocuments->registrationdocument }}</p>
        <p class="card-text">Roadworthiness : {{ $cardocuments->roadworthiness }}</p>
        
        <a href="{{ route('cardocuments.download', $cardocuments->id) }}" title="Download document"><button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>

  </div>
       
    </hr>
  
  </div>
</div>
    </div>
@endsection
