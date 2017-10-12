@extends('layouts.app-admin')

@section('content')

<div class="content-body" style="margin-top: 100px">
    <section class="page-section pt-0 pb-50">
        <div class="container">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th class="col-md-5">Liveaboard Name</th>
                        <th class="col-md-2">Created At</th>
                        <th class="col-md-2">Last Update</th>
                        <th class="col-md-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($liveaboards as $liveaboard)
                    <tr>
                        <td>{{ $liveaboard->name }}</td>
                        <td>{{ $liveaboard->created_at->diffForHumans() }}</td>
                        <td>{{ $liveaboard->updated_at->diffForHumans() }}</td>
                        <td>
                            <a class="btn btn-info">Edit<a>
                            <a class="btn btn-success">View Itineraries<a>
                            <a class="btn btn-danger">Delete<a>
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