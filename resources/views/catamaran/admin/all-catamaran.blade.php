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
                    <h4 class="trans-uppercase mb-10">All Catamarans <a href="{{ url('admin/catamaran/add') }}" class="btn btn-lg btn-success">Add New Catamaran</a></h4>
                    <div class="cws_divider mb-30"></div>
                </div>
            </div> 
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th class="col-md-5">Catamaran Name</th>
                        <th class="col-md-2">Created At</th>
                        <th class="col-md-2">Last Edit</th>
                        <th class="col-md-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($catamarans as $catamaran)
                    <tr>
                        <td>{{ $catamaran->name }}</td>
                        <td>{{ $catamaran->created_at->diffForHumans() }}</td>
                        <td>{{ $catamaran->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ url('admin/catamaran/edit/') }}/{{ $catamaran->slug }}" class="btn btn-info">Edit<a>
                            <a href="{{ url('admin/catamaran/itinerary/') }}/{{ $catamaran->slug }}" class="btn btn-warning">View Itineraries<a>
                            <a href="{{ url('admin/catamaran/delete/') }}/{{ $catamaran->slug }}" onclick="return confirm('Are you sure you want to delete this Catamaran?');" class="btn btn-danger">Delete<a>
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