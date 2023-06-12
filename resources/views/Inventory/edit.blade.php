
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header"><h1>Car inventory Page</h1></div>
                <div class="card-body">
                    
                    <form action="{{ url('inventory/' .$inventory->id) }}" method="post">
                      {!! csrf_field() !!}
                      @method("PATCH")
                      <input type="hidden" name="id" id="id" value="{{$inventory->id}}" id="id" />
                      <label>Car type</label></br>
                      <input type="text" name="cartype" id="cartype" value="{{$inventory->cartype}}" class="form-control"></br>
                      <label>Car model</label></br>
                      <input type="text" name="carmodel" id="carmodel" value="{{$inventory->carmodel}}" class="form-control"></br>
                      <label>Available cars</label></br>
                      <input type="text" name="availablecars" id="availablecars" value="{{$inventory->availablecars}}" class="form-control"></br>
                      <label>Sold cars</label></br>
                      <input type="text" name="soldcars" id="soldcars" value="{{$inventory->soldcars}}" class="form-control"></br>
                      
                      <input type="submit" value="Save" class="btn btn-success"></br>
                  </form>
                
                </div>
              </div>
              

                </div>
            </div>
        </div>
    </div>
@endsection
