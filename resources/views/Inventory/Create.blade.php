
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header"><h1>Car Inventory Page</h1></div>
                <div class="card-body">
                  <form action="/inventory/store" method="post">
                    {!! csrf_field() !!}
                      <label>Car type</label><br>
                      <input type="text" name="cartype" id="cartype" class="form-control"><br>
                      <label>Car model</label><br>
                      <input type="text" name="carmodel" id="carmodel" class="form-control"><br>
                      <label>Available cars</label><br>
                      <input type="text" name="availablecars" id="availablecars" class="form-control"><br>
                      <label>Sold cars</label><br>
                      <input type="text" name="soldcars" id="soldcars" class="form-control"><br>
              
                      <input type="submit" value="Save" class="btn btn-success"><br>
                  </form>
                
                </div>
              </div>
              
            </div>
        </div>
    </div>
@endsection
