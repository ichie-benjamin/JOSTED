@extends('layouts.front')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('home') }}">Dashboard</a>
                <span class="breadcrumb-item active">Admission Application</span>
            </nav>
        </div><!-- br-pageheader -->
        @if ($type == 'ijmb')
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5 text-center mb-2">INTERIM JOINT MATRICULATION BOARD PROGRAMME APPLICATION</h4>
                <h3 class=" text-center tx-gray-800 mg-b-5">Important Notice</h3>
                <p class="mg-b-0 text-center">Applicants who submit more than one application form or use one receipt for more than one set forms will be disqualified </p>
            </div>
        @else
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5 text-center text-uppercase mb-2">JOINT University Preliminary Examination Board APPLICATION</h4>
                <h3 class=" text-center tx-gray-800 mg-b-5">Important Notice</h3>
                <p class="mg-b-0 text-center">Applicants who submit more than one application form or use one receipt for more than one set forms will be disqualified </p>
            </div>
        @endif


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                @if ($errors->any())

                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-layout form-layout-1">
                    <form action="{{ route('admission.stores') }}" method="POST">

                        {{ csrf_field() }}

                        <input type="hidden" value="{{ $type }}" name="type">

                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('first_name') ? 'parsley-error' : '' }}" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Enter first name">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('title', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Surname: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('surname') ? 'parsley-error' : '' }}" type="text" name="surname" value="{{ old('surname') }}" placeholder="Enter surname">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('title', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                      <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Other Names: </label>
                                <input class="form-control {{ $errors->has('other_names') ? 'parsley-error' : '' }}" type="text" name="other_names" value="{{ old('other_names') }}" placeholder="Enter other names">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('other_names', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Maiden Names: </label>
                                <input class="form-control {{ $errors->has('maiden_name') ? 'parsley-error' : '' }}" type="text" name="maiden_name" value="{{ old('maiden_name') }}" placeholder="Enter maiden name">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('maiden_name', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Telephone (Residential): </label>
                                <input class="form-control {{ $errors->has('r_telephone') ? 'parsley-error' : '' }}" type="text" name="r_telephone" value="{{ old('r_telephone') }}" placeholder="Enter Telephone">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('r_telephone', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email Address: </label>
                                <input disabled class="form-control {{ $errors->has('email') ? 'parsley-error' : '' }}" type="text" name="email" value="{{ auth()->user()->email }}" placeholder="Enter Email">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('email', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->


                        <div class="col-lg-12">
                            <div class="form-group ">
                                <label  class="form-control-label">Permanent Home Address: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('permanent_home_address') ? 'parsley-error' : '' }}" type="text" name="permanent_home_address" value="{{ old('permanent_home_address') }}" placeholder="Enter address">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('permanent_home_address', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-8 -->

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label  class="form-control-label">Payment Teller Number: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('teller') ? 'parsley-error' : '' }}" type="text" name="teller" value="{{ old('teller') }}" placeholder="Enter teller number">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('teller', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-8 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Telephone (GSM) : <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('g_telephone') ? 'parsley-error' : '' }}" type="text" name="g_telephone" value="{{ old('g_telephone') }}" placeholder="Enter phone number">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('g_telephone', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
                                <select required name="nationality" onchange="fetchState(this.options[this.selectedIndex].getAttribute('data-id'))" class="form-control select2-show-search {{ $errors->has('nationality') ? 'parsley-error' : '' }}" data-placeholder="Select Nationality">
                                    @foreach (\App\Country::all() as $key => $country)
                                        <option data-id="{{ $country->id }}" value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('nationality', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">State of origin: <span class="tx-danger">*</span></label>
                                <select required name="state_of_origin" onchange="fetchLgas(this.value)" disabled class="form-control select2-show-search {{ $errors->has('state_of_origin') ? 'parsley-error' : '' }}" data-placeholder="Select State of Origin">
                                    <option value=''>Select Country First</option>
                                </select>
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('state_of_origin', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Local Govt of origin: <span class="tx-danger">*</span></label>
                                <select required name="lga" class="form-control select2-show-search {{ $errors->has('lga') ? 'parsley-error' : '' }}" data-placeholder="Select LGA">
                                    <option value=''>Select State First</option>
                                </select>
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('lga', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Date of Birth : <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('date_of_birth') ? 'parsley-error' : '' }}" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Enter date of birth">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('date_of_birth', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Sex : <span class="tx-danger">*</span></label>
                                <select required name="sex" class="form-control select2 {{ $errors->has('sex') ? 'parsley-error' : '' }}" data-placeholder="Select LGA">
                                    <option label="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('sex', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Marital Status : <span class="tx-danger">*</span></label>
                                <select required name="marital_status" class="form-control select2 {{ $errors->has('marital_status') ? 'parsley-error' : '' }}" data-placeholder="Select Marital Status">
                                    <option label="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('marital_status', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Guardian name: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('guardian_name') ? 'parsley-error' : '' }}" type="text" name="guardian_name" value="{{ old('guardian_name') }}" placeholder="Enter guardian name">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('guardian_name', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Guardian Occupation: <span class="tx-danger">*</span></label>
                                <input required class="form-control  {{ $errors->has('guardian_occupation') ? 'parsley-error' : '' }}" type="text" name="guardian_occupation" value="{{ old('guardian_occupation') }}" placeholder="Enter Guardian Occupation">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('guardian_occupation', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Guardian Telephone: <span class="tx-danger">*</span></label>
                                <input required class="form-control {{ $errors->has('guardian_telephone') ? 'parsley-error' : '' }}" type="text" name="guardian_telephone" value="{{ old('guardian_telephone') }}" placeholder="Enter Guardian Telephone">
                                <ul class="parsley-errors-list filled">
                                    {!! $errors->first('guardian_telephone', '<li>:message.</li>') !!}
                                </ul>
                            </div>
                        </div><!-- col-4 -->


                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <input class="btn btn-info" type="submit" value="Submit & Continue >>">
                    </div><!-- form-layout-footer -->
                    </form>
                </div><!-- form-layout -->

            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="{{ asset('lib/select2.min.css') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('/lib/select2.min.js') }}"></script>

    <script>
        function fetchState(country_id){
            // alert(country_id);
            $('[name="state_of_origin"]').html('<option value="">Fetching ..</option>'); // keep the lga field disabled
            $('[name="lga"]').prop('disabled', true); // keep the lga field disabled
            $.ajax({
                url: "{{ url('/') }}" + '/countries/' + country_id + '/states',
                method: 'get',
                success: function (data) {
                    let output = "<option value=''>Select State</option>";
                    data.states.forEach(el => {
                        output += `<option data-id="${el.id}" value="${el.name}">${el.name}</option>`;
                    });

                    $('[name="state_of_origin"]').prop('disabled', false).html(output);

                },
                error: function (err) {
                    alert("Error: " + err.statusText);
                }
            });
        }

        function fetchLgas(state_name){
            $('[name="lga"]').html('<option value="">Fetching ..</option>') // keep the lga field disabled

            $.ajax({
                url: "{{ url('/') }}" + '/state_name/' + state_name + '/lgas',
                method: 'get',
                success: function (data) {
                    let output = "<option value=''>Select LGA</option>";
                    data.lgas.forEach(el => {
                        output += `<option value="${el.name}">${el.name}</option>`;
                    });

                    $('[name="lga"]').prop('disabled', false).html(output);
                },
                error: function (err) {
                    alert("Error: " + err.statusText);
                }
            });
        }
    </script>
@endsection
