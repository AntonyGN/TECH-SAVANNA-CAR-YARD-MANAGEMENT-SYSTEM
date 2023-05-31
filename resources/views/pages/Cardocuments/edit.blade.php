@extends('cardocuments.layout')
@section('content')
<div class="card">
  <div class="card-header">Documents Page</div>
  <div class="card-body">
      
      <form action="{{ url('document/' .$documents->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$documents->id}}" id="id" />
        <label>Logbook</label></br>
        <input type="text" name="logbook" id="logbook" value="{{$documents->logbook}}" class="form-control"></br>
        <label>Registration-document</label></br>
        <input type="text" name="registration-document" id="registration-document" value="{{$documents->registration-document}}" class="form-control"></br>
        <label>Road-worthiness</label></br>
        <input type="text" name="road-worthiness" id="road-worthiness" value="{{$documents->road-worthiness}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop