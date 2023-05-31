@extends('contracts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contracts  Page</div>
  <div class="card-body">
      
      <form action="{{ url('contracts/' .$contracts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contracts->id}}" id="id" />
        <label>Contract number</label></br>
        <input type="text" name="contractnumber" id="contractnumber" value="{{$contracts->contractnumber}}" class="form-control"></br>
        <label>Contract type</label></br>
        <input type="text" name="contracttype" id="contracttype" value="{{$contracts->contracttype}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="date" value="{{$contracts->date}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$contracts->duration}}" class="form-control"></br>
        <label>Contract terms</label></br>
        <input type="text" name="contractterms" id="contractterms" value="{{$contracts->contractterms}}" class="form-control"></br>
        <label>Termination</label></br>
        <input type="text" name="termination" id="termination" value="{{$contracts->termination}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop