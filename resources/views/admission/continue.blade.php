@extends('layouts.front')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('home') }}">Dashboard</a>
                <span class="breadcrumb-item active">Admission Application</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Choices of Course/Subject</h4>
{{--            <p class="mg-b-0">Applicants who submit more than one application form or use one receipt for more than one set forms will be disqualified </p>--}}
        </div>


        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <!-- form-layout -->



                <courses :p_primaries="{{ json_encode($post_primaries) }}" :id="{{ $admission->id }}" :all_certifications="{{ json_encode($certifications) }}" :all_courses="{{ json_encode($admission->courses) }}"></courses>

                @section('hide')
                    <form method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="tx-gray-800 mg-b-5">School of certificate results : WAEC / NECO SSCE / NABTEB / Others </h4>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <div class="bd bd-gray-300 rounded table-responsive">
                                    <table class="table table-hover mg-b-0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name of Examination</th>
                                            <th>Date of Examination</th>
                                            <th>Examination Number</th>
                                            <th>Subjects</th>
                                            <th>Grades</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Tiger Nixon</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Tiger Nixon</td>
                                            <td><i class="fa fa-trash" /> </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-25 mt-4">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label">Course/Subject Name : <span class="tx-danger">*</span></label>
                                    <input required class="form-control" type="text" placeholder="Enter name">
                                </div>
                                <button class="btn btn-info" type="submit">Save and add more</button>

                            </div><!-- col-4 -->

                        </div><!-- row -->
                    </form>
                @endsection

            </div>
        </div>
    </div>
@endsection
