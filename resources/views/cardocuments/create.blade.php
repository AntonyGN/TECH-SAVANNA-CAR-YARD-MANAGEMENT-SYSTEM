@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="card">
  <div class="card-header">Cardocuments Page</div>
  <div class="card-body">
      
      <form action="{{ url('cardocuments') }}" method="post">
        {!! csrf_field() !!}
        <label>Logbook</label></br>
        <input type="text" name="logbook" id="logbook" class="form-control"></br>
        <label>Registrationdocument</label></br>
        <input type="text" name="registrationdocument" id="registrationdocument" class="form-control"></br>
        <label>Roadworthiness</label></br>
        <input type="text" name="roadworthiness" id="roadworthiness" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop