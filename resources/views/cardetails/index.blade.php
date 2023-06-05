@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h1 class="float-left">Car details</h1>
                        <a href="{{ url('/cardetails/create') }}" class="btn btn-success btn-sm float-right" title="Add New detail">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Fueltype</th>
                                        <th>YearofManufacture</th>
                                        <th>Transmission</th>
                                        <th>ChassisNo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cardetails as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->make }}</td>
                                            <td>{{ $item->model }}</td>
                                            <td>{{ $item->fueltype  }}</td>
                                            <td>{{ $item->yearofmanufacture}}</td>
                                            <td>{{ $item->transmission }}</td>
                                            <td>{{ $item->chassisno }}</td>
                                            <td>
                                                <a href="{{ url('/cardetails/' . $item->id) }}" title="View Car">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                                    </button>
                                                </a>
                                                <a href="{{ url('/cardetails/' . $item->id . '/edit') }}" title="Edit Car">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/cardetails' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
