@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Vehicles-sales</h1>
                </div>
                <div class="card-body">
                    <a href="{{ url('/vehiclesales/create') }}" class="btn btn-success btn-sm" title="Add New detail">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>make</th>
                                    <th>model</th>
                                    <th>chassisno</th>
                                    <th>yearofManufacture</th>
                                    <th>saleprice</th>
                                    <th>dateofsale</th>
                                    <th>buyername</th>
                                    <th>buyersddress</th>
                                    <th>paymentmethod</th>
                                    <!-- <th>Comments</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehiclesales as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->make }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->chassisno  }}</td>
                                    <td>{{ $item->yearofmanufacture}}</td>
                                    <td>{{ $item->salesprice }}</td>
                                    <td>{{ $item->dateofsale }}</td>
                                    <td>{{ $item->buyername }}</td>
                                    <td>{{ $item->buyersddress }}</td>
                                    <td>{{ $item->paymentmethod}}</td>
                                    <!-- <td>{{ $item->comments }}</td> -->

                                    <td>
                                        <a href="{{ url('/vehiclesales/' . $item->id) }}" title="View Car"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/vehiclesales/' . $item->id . '/edit') }}" title="Edit Car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <form method="POST" action="{{ url('/vehiclesales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;
                                                "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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