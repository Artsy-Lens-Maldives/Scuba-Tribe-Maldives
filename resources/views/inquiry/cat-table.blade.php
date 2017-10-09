@extends('layouts.app-admin')

@section('content')

<div class="content-body" style="margin-top: 100px">
    <section class="page-section pt-0 pb-50">
        <div class="container">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th>Catamaran Name</th>
                        <th>Itenary Date</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>Inquiry</th>
                        <th>Submited At</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->catamaran->name }}</td>
                        <td>{{ $inquiry->cat_itinerary->date }}</td>
                        <td>{{ $inquiry->fname }} {{ $inquiry->lname }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ $inquiry->phone }}</td>
                        <td>{{ $inquiry->title }}</td>
                        <td>{{ $inquiry->inquiry }}</td>
                        <td>{{ $inquiry->created_at->diffForHumans() }}</td>
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