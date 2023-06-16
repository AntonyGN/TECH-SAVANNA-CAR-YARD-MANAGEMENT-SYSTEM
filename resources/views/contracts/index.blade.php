@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Contracts</h1>
                </div>
                <div class="card-body">
                    <a href="{{ url('/contracts/create') }}" class="btn btn-success btn-sm" title="Add New Contracts">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Contractnumber</th>
                                    <th>Contracttype</th>
                                    <th>Date</th>
                                    <th>Duration</th>
                                    <th>Contractterms</th>
                                    <th>Terminationn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contracts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->contractnumber}}</td>
                                    <td>{{ $item->contracttype }}</td>
                                    <td>{{ $item->date}}</td>
                                    <td>{{ $item->duration}}</td>
                                    <td>{{ $item->contractterms}}</td>
                                    <td>{{ $item->termination}}</td>

                                    <td>
                                        <a href="{{ url('/contracts/' . $item->id) }}" title="View contracts"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/contracts/' . $item->id . '/edit') }}" title="Edit contracts"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/contracts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete contracts" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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