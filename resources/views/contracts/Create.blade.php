@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="card">
  <div class="card-header">
    <h1>Contracts Page</h1>
  </div>
  <div class="card-body">

    <form action="{{ url('contracts') }}" method="post">
      {!! csrf_field() !!}
      <label>Contract Number</label></br>
      <input type="text" name="contractnumber" id="contractnumber" class="form-control"></br>
      <label>Contract Type</label></br>
      <input type="text" name="contracttype" id="contracttype" class="form-control"></br>
      <label>Date</label></br>
      <input type="text" name="date" id="date" class="form-control"></br>
      <label>Duration</label></br>
      <input type="text" name="duration" id="duration" class="form-control"></br>
      <label>Contract Terms</label></br>
      <input type="text" name="contractterms" id="contractterms" class="form-control"></br>
      <label>Termination</label></br>
      <input type="text" name="termination" id="termination" class="form-control"></br>
      <label>Purchase Agreement Document</label></br>
      <input type="text" name="purchaseagreementdocument" id="purchaseagreementdocument" class="form-control"></br>
      <label>Sales Agreement Document</label></br>
      <input type="text" name="salesagreementdocument" id="salesagreementdocument" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop