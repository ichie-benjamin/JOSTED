@extends('layouts.front')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 ">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">[{{ $article->article_title }}]  by {{ $article->name }}</span>
            </nav>
        </div><!-- br-pageheader -->
        @include('notification')
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">[{{ $article->article_title }}] </h4>

            <div class="br-pagebody bg-white" style="padding: 10px 10px;">
                <div class="mt-4 mb-4">
                    <div class="">
                        <div class="bd-gray-300  table-responsive table-striped">
                                <table id="datatable1" class="table table-bordered mg-b-0">
                                    <thead>
                                    <tr>
                                        <th width="30%">Field </th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td class="text-capitalize">
                                               {{ str_replace('_',' ',$item) }}
                                            </td>
                                            <td class="text-capitalize">
                                                {{ $article[$item] }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    {{--                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Basic Responsive DataTable</h6>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

