@extends('layouts.front')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 ">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Articles</span>
            </nav>
        </div><!-- br-pageheader -->
        @include('notification')
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">All Articles</h4>

            <div class="br-pagebody bg-white" style="padding: 10px 10px;">
                <div class="mt-4 mb-4">
                    <div class="">
                        <div class="bd-gray-300  table-responsive table-striped">
                            @if (count($articles) > 0)
                                <table id="datatable1" class="table mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>Name / Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Article Title</th>
                                        <th>Author</th>
                                        <th>Date Submitted</th>
{{--                                        <th></th>--}}
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $item)
                                        <tr>
                                            <td>
                                                {{ $item->name }} / <br />
                                                {{ $item->email }}
                                            </td>
{{--                                            <td class="text-uppercase">--}}
{{--                                                {{ $item->is_admin ? 'YES' : 'NO' }}--}}
{{--                                            </td>--}}
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->state }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->article_title }}</td>
                                            <td>{{ $item->name_of_author }}</td>
                                            <td>{{ $item->created_at->format('Y-M-d') }}</td>
{{--                                            <td class="pd-r-0-force tx-center"><a href="{{ route('admin.user.destroy',$item) }}" class="btn btn-xs btn-danger">Delete</a></td>--}}
                                            @if ($item->approved)
                                                <td class="pd-r-0-force tx-center"><a href="#" disabled class="btn btn-xs btn-success btn-oblong">Approved</a></td>
                                            @else
                                                <td class="pd-r-0-force tx-center"><a href="{{ route('admin.article.approve',$item->id) }}" class="btn btn-outline-info btn-oblong">Approve</a></td>
                                            @endif
                                            <td><a href="{{ route('admin.article.view',$item->id) }}" class="btn btn-outline-info btn-oblong">View Article</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h3 class="text-center mt-4 mb-4">No Articles Yet</h3>
                            @endif
                        </div>
                    </div>
                    {{--                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Basic Responsive DataTable</h6>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable1').DataTable();
        } );
    </script>
@endsection
