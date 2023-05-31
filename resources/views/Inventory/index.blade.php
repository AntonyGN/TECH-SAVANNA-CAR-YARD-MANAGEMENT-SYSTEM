
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Inventory</div>
                    <div class="card-body">
                        <a href="{{ url('/inventory/create') }}" class="btn btn-success btn-sm" title="Add New inventory">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Cartype</th>
                                        <th>Carmodel</th>
                                        <th>Availablecars</th>
                                        <th>Soldcars</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inventory as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->cartype }}</td>
                                        <td>{{ $item->carmodel }}</td>
                                        <td>{{ $item->availablecars  }}</td>
                                        <td>{{ $item->soldcars}}</td>
                                        

                                        <td>
                                            <a href="{{ url('/inventory/' . $item->id) }}" title="View Car"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/inventory/' . $item->id . '/edit') }}" title="Edit Car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/inventory' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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