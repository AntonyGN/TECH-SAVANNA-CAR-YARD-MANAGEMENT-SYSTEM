@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Customers Management'])
<div class="container">
    <div class="row">
        <div class="col-md-11">

            <div class="card">
                <div class="card-header">
                    <h1>Customers Page</h1>
                </div>
                <div class="card-body">

                    <form action="/customers/store" method="post">
                        {!! csrf_field() !!}
                        <label>Fullname:</label></br>
                        <input type="text" name="name" id="name" class="form-control"></br>
                        <label>Email:</label></br>
                        <input type="text" name="email" id="email" class="form-control"></br>
                        <label>Phone Number:</label></br>
                        <input type="string" name="phone" id="phone" class="form-control"></br>
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>

                </div>
            </div>



        </div>
    </div>
</div>
</div>
@endsection