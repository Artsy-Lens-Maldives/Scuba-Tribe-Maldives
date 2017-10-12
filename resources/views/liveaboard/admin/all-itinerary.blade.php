@extends('layouts.app-admin')

@section('content')

<div class="content-body" style="margin-top: 100px">
    <section class="page-section pt-0 pb-50">
        <div class="container">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                
                @endif
                @endforeach
            </div>
            <div class="row" style="">
                <div class="col-md-12">
                    <h4 class="trans-uppercase mb-10">All Itineraries for {{ $live->name }} <a href="{{ Request::url() }}/add" class="btn btn-lg btn-success">Add New Itinerary</a></h4>
                    <div class="cws_divider mb-30"></div>
                </div>
            </div> 
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th>Liveaboard Name</th>
                        <th>Date</th>
                        <th>Capacity</th>
                        <th>Created At</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($itineraries as $itinerary)
                    <tr>
                        <td>{{ $itinerary->liveaboard->name }}</td>
                        <td>{{ $itinerary->date }}</td>
                        <td>{{ $itinerary->current }} of {{ $itinerary->max }}</td>
                        <td>{{ $itinerary->created_at->diffForHumans() }}</td>
                        <td>{{ $itinerary->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ url('admin/liveaboard/itinerary/edit') }}/{{ $itinerary->id }}" class="btn btn-info">Edit<a>
                            <a href="{{ url('admin/liveaboard/itinerary/delete') }}/{{ $itinerary->id }}" onclick="return confirm('Are you sure you want to delete this itinerary?');" class="btn btn-danger">Delete<a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

@endsection