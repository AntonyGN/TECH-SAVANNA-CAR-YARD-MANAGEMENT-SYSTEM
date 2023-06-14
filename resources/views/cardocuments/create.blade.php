@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Car Documents'])

    <div class="card">
    <div class="card-header"><h2>Car documents Page</h2></div>
        <div class="card-body">
            <form method="POST" action="{{ route('cardocuments.upload') }}" enctype="multipart/form-data">
                @csrf

                <label>Logbook</label><br>
                <input type="text" name="logbook" id="logbook" class="form-control"><br>

                <label>Registration Document</label><br>
                <input type="text" name="registrationdocument" id="registrationdocument" class="form-control"><br>

                <label>Roadworthiness</label><br>
                <input type="text" name="roadworthiness" id="roadworthiness" class="form-control"><br>

                <input type="file" name="document">
                <input type="submit" value="Upload and Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection
