<style  media="all">
    /*! CSS Used from: http://127.0.0.1:8000/css/bracket.css */
    /*@media print{*/
    /*    *,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}*/
    /*    thead{display:table-header-group;}*/
    /*    tr,img{page-break-inside:avoid;}*/
    /*    h2{orphans:3;widows:3;}*/
    /*    h2{page-break-after:avoid;}*/
    /*    .table{border-collapse:collapse!important;}*/
    /*    .table td,.table th{background-color:#fff!important;}*/
    /*    .table-bordered th,.table-bordered td{border:1px solid #ddd!important;}*/
    /*}*/
    /**,*::before,*::after{box-sizing:inherit;}*/
    h2,h4{margin-top:0;margin-bottom:.5rem;}
    img{vertical-align:middle;border-style:none;}
    table{border-collapse:collapse;}
    th{text-align:left;}
    h2,h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
    h2{font-size:2rem;}
    h4{font-size:1.5rem;}
    /*.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}*/
    .col-3,.col-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
    .col-3{flex:0 0 25%;max-width:25%;}
    .col-12{flex:0 0 100%;max-width:100%;}
    .table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent;}
    .table th,.table td{padding:0.75rem;vertical-align:top;border-top:1px solid #dee2e6;}
    .table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6;}
    .table-bordered{border:1px solid #dee2e6;}
    .table-bordered th,.table-bordered td{border:1px solid #dee2e6;}
    .table-bordered thead th{border-bottom-width:2px;}
    /*@media (max-width: 991px){*/
    /*    .table-responsive{display:block;width:100%;overflow-x:auto;-ms-overflow-style:-ms-autohiding-scrollbar;}*/
    /*    .table-responsive.table-bordered{border:0;}*/
    /*}*/
    .rounded{border-radius:3px!important;}
    .justify-content-center{justify-content:center!important;}
    .mt-2{margin-top:0.5rem!important;}
    .mt-4{margin-top:1.5rem!important;}
    .mb-4{margin-bottom:1.5rem!important;}
    .mx-auto{margin-right:auto!important;margin-left:auto!important;}
    .text-center{text-align:center!important;}
    .text-uppercase{text-transform:uppercase!important;}
    .table{border-collapse:separate;border-spacing:0;}
    .table thead > tr > th{border-top:0;border-bottom:0;font-weight:700;font-size:12px;text-transform:uppercase;color:#343a40;letter-spacing:0.5px;}
    .table tbody > tr > th{color:#343a40;font-weight:500;}
    .table-bordered{border:0;}
    .bd{border:1px solid rgba(0, 0, 0, 0.15);}
    .bd-gray-300{border-color:#dee2e6;}
    .mg-b-0{margin-bottom:0px;}
    .tx-bold{font-weight:700;}
    .tx-uppercase{text-transform:uppercase;}
</style>

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
                            <h2 class="text-uppercase">JOINT UNIVERSITY PRELIMINARY EXAMINATION BOARD </h2>
                            {{--                            <h4 class="text-uppercase mt-2">Joint University Preliminary Examination Board (JUPEB)</h4>--}}
                            <h4 class="mt-4 mb-4">Application Printout</h4>
                        </div>
                    @endif

{{--                    <div class="mx-auto">--}}
                        <div class="col-3">
{{--                                <div class="justify-content-center text-center">--}}
                                    <img style="width: 170px; height: 170px; align-content: center; margin-top: 20px; margin-bottom: 20px" src="{{ asset($admission->photo) }}">
{{--                                </div>--}}
                        </div>
{{--                    </div>--}}
                    <div class="col-12">
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
                                    <td>{{ $admission->state_of_origin }}</td>
                                    <td class="tx-bold">Nationality</td>
                                    <td>{{ $admission->nationality }}</td>
                                </tr>

                                <tr>
                                    <td class="tx-bold" width="30%">Permanent Home Address</td>
                                    <td colspan="3">{{ $admission->permanent_home_address }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="bd bd-gray-300 rounded table-bordered table-responsive">
                        <table class="table mg-b-0">
                            <tbody>
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
                </div>
                <!-- form-layout -->

            </div>
        </div>
