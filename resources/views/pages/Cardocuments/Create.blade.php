@extends('cardocuments.layout')
@section('content')
<div class="card">
  <div class="card-header">Documents Page</div>
  <div class="card-body">
      
      <form action="{{ url('documents') }}" method="post">
        {!! csrf_field() !!}
        <label>Logbook</label></br>
        <input type="text" name="logbook" id="logbook" class="form-control"></br>
        <label>Registration-document</label></br>
        <input type="text" name="registration-document" id="registration-document" class="form-control"></br>
        <label>Road-worthiness</label></br>
        <input type="text" name="road-worthiness" id="road-worthiness" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop