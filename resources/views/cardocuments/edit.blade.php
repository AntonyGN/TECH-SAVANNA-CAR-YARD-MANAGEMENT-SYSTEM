@extends('cardocuments.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Cardocuments Page</div>
  <div class="card-body">
      
      <form action="{{ url('cardocuments/' .$cardocuments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cardocuments->id}}" id="id" />
        <label>Logbook</label></br>
        <input type="text" name="logbook" id="logbook" value="{{$cardocuments->logbook}}" class="form-control"></br>
        <label>Registrationdocument</label></br>
        <input type="text" name="registrationdocument" id="registrationdocument" value="{{$cardocuments->registrationdocument}}" class="form-control"></br>
        <label>Roadworthiness</label></br>
        <input type="text" name="roadworthiness" id="roadworthiness" value="{{$cardocuments->roadworthiness}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop