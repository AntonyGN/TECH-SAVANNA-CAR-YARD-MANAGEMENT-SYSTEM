@extends('usermanagement.layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h1>User Management Page</h1>
  </div>
  <div class="card-body">

    <form action="{{ url('usermanagement/' .$usermanagement->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$usermanagement->id}}" id="id" />
      <label>Name</label></br>
      <input type="text" name="username" id="username" value="{{$usermanagement->username}}" class="form-control"></br>
      <label>Email</label></br>
      <input type="text" name="role" id="model" value="{{$usermanagement->role}}" class="form-control"></br>
      <label>Password</label></br>
      <input type="text" name="role" id="model" value="{{$usermanagement->role}}" class="form-control"></br>

      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop