@extends('layouts.front')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('home') }}">Dashboard</a>
                <span class="breadcrumb-item active">Print Application Slip</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Print your application slip
            <a href="{{ route('download_pdf',$admission->id) }}" class="btn btn-success float-right">Print Slip</a>
            </h4>
{{--            <p class="mg-b-0">Applicants who submit more than one application form or use one receipt for more than one set forms will be disqualified </p>--}}
        </div>


        <div class="br-pagebody">
            <div class="br-section-wrapper ">

                <div class="row">
                    @if ($admission->type == 'ijmb')
                    <div class="text-center">
                        <h2>INTERIM JOINT MATRICULATION BOARD PROGRAMME</h2>
{{--                        <h4 class="text-uppercase mt-2">Joint University Preliminary Examination Board (JUPEB)</h4>--}}
                        <h4 class="mt-4 mb-4">Application Printout</h4>
                    </div>
                    @else
                        <div class="text-center">
                            <h2 class="text-uppercase">JOINT University Preliminary Examination Board </h2>
{{--                            <h4 class="text-uppercase mt-2">Joint University Preliminary Examination Board (JUPEB)</h4>--}}
                            <h4 class="mt-4 mb-4">Application Printout</h4>
                        </div>
                        @endif
                    <div class="col-9">
                        <div class="bd bd-gray-300 rounded table-bordered table-responsive">
                            <table class="table mg-b-0">
                                <thead>
                                <tr>
                                    <th class="text-center" colspan="4">Applicant Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="tx-bold" width="30%">Applicant ID</td>
                                    <td colspan="3">{{ $admission->applicant_id }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Teller ID</td>
                                    <td colspan="3">{{ $admission->teller }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">First Name</td>
                                    <td colspan="3">{{ $admission->first_name }}</td>
                                </tr>

                                 <tr>
                                    <td class="tx-bold" width="30%">Surname</td>
                                    <td colspan="3">{{ $admission->surname }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Other Names</td>
                                    <td colspan="3">{{ $admission->other_names }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Marital Status</td>
                                    <td colspan="3">{{ $admission->marital_status }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Date of Birth</td>
                                    <td>{{ $admission->date_of_birth }}</td>
                                    <td class="tx-bold">GENDER</td>
                                    <td>{{ $admission->sex }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Email</td>
                                    <td>{{ $admission->email }}</td>
                                    <td class="tx-bold">TELEPHONE (GSM)</td>
                                    <td>{{ $admission->g_telephone }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">L.G.A of Origin</td>
                                    <td colspan="3">{{ $admission->lga }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">State of origin</td>
                                    <td>{{ $admission->state_of_origin  }}</td>
                                    <td class="tx-bold">Nationality</td>
                                    <td>{{ $admission->nationality }}</td>
                                </tr>

                                <tr>
                                    <td class="tx-bold" width="30%">Permanent Home Address</td>
                                    <td colspan="3">{{ $admission->permanent_home_address }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center tx-bold" colspan="4">GUARDIAN DETAILS</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Guardian Name</td>
                                    <td colspan="3">{{ $admission->guardian_name }}</td>
                                </tr>
                                <tr>
                                    <td class="tx-bold" width="30%">Guardian Occupation </td>
                                    <td>{{ $admission->guardian_occupation }}</td>
                                    <td class="tx-bold">Guardian Phone</td>
                                    <td>{{ $admission->guardian_telephone }}</td>
                                </tr>

                                <tr>
                                    <td class="text-center tx-bold text-uppercase" colspan="4">A level subjects/courses</td>
                                </tr>
                                <tr>
                                    <th colspan="4" class="tx-bold tx-uppercase">Subjects</th>
                                </tr>
                                @foreach ($admission->courses as $course => $value)
                                    <tr>
                                    <td colspan="4">{{ $value }}</td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td class="text-center tx-bold text-uppercase" colspan="4">Post-Primary Institutions attended, with dates :</td>
                                </tr>
                                <tr class="text-uppercase">
                                    <th>Name of institute</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Qualification</th>
                                </tr>
                                @foreach($post_primaries as $item)
                                <tr>
                                    <td>{{ $item->name_of_institution }} </td>
                                    <td>{{ $item->from }}</td>
                                    <td>{{ $item->to }}</td>
                                    <td>{{ $item->qualifications }}</td>
                                </tr>
                                @endforeach


                                <tr>
                                    <td class="text-center tx-bold text-uppercase" colspan="4">School Certificates Results : WAEC/NECO SSCE / NABTEB / Others :</td>
                                </tr>
                                <tr class="text-uppercase">
                                    <th>NAME OF EXAMINATION</th>
                                    <th>DATE OF EXAMINATION</th>
                                    <th>EXAM NO.</th>
                                    <th>SUBJECT GRADES</th>
                                </tr>
                                @foreach($certifications as $item)
                                    <tr>
                                        <td>{{ $item->name_of_exam }} </td>
                                        <td>{{ $item->date_of_exam }}</td>
                                        <td>{{ $item->exam_number }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border">
                            <div class="justify-content-center text-center">
                                <img class="text-center" style="width: 170px; height: 170px; align-content: center; margin-top: 20px; margin-bottom: 20px" src="{{ $admission->photo }}">
                            </div>
                        </div>
{{--                        <div class="border" style="margin-top: 30px">--}}
{{--                            <div class="justify-content-center text-center">--}}
{{--                                <img class="text-center" style="width: 170px; height: 170px; align-content: center; padding-top: 5px; padding-bottom: 5px" src="{{ auth()->user()->avatar }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- form-layout -->

            </div>
        </div>
    </div>
@endsection
