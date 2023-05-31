
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])

                <div class="card">
                    <div class="card-header">Cardocuments</div>
                    <div class="card-body">
                        <a href="{{ url('/cardocuments/create') }}" class="btn btn-success btn-sm" title="Add New Cardocument">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logbook</th>
                                        <th>Registrationdocument</th>
                                        <th>Roadworthiness</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cardocuments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->logbook}}</td>
                                        <td>{{ $item->registrationdocument }}</td>
                                        <td>{{ $item->roadworthiness }}</td>
                                        <td>{{ $item->actions }}</td>
 
                                        <td>
                                            <a href="{{ url('/cardocuments/' . $item->id) }}" title="View documentt"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cardocuments/' . $item->id . '/edit') }}" title="Edit document"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/cardocuments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete document" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            
     
<!-- @endsection -->