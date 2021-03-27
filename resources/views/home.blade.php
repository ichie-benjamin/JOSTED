@extends('layouts.front')

@section('content')
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Welcome Back {{ auth()->user()->name }}</h4>
            @if ($admission)
            <p class="mg-b-0">Your have an exiting application</p>
            @else
                <p class="mg-b-0">Start your admission process</p>
                @endif
        </div><!-- d-flex -->


        @if ($admission)
            <div class="br-pagebody mg-t-5 pd-x-30">
                <div class="row row-sm">
                    <div class="col-md-2"></div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-teal rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-steam tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <a href="{{ route('admission.continue') }}">
                                        <p class="tx-20 tx-white tx-lato tx-bold mg-b-2 lh-1">Continue Application</p>
                                    </a>
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Continue Your Application</p>

                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-br-primary rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-printer tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <a href="{{ route('admission.finish') }}">
                                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">Print Admission Slip</p>
                                    </a>
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Print Admission Slip</p>

                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                </div>
            </div>
        @else
        <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
                <div class="col-md-1"></div>
                <div class="col-sm-7 col-xl-5">
                    <div class="bg-teal rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
{{--                            <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>--}}
                            <img style="height: 50px; width: 50px" src="{{ asset('images/logo.jpeg') }}" />
                            <div class="mg-l-20">
                                <a href="{{ route('admission.start','jupeb') }}">
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">JUPEB APPLICATION</p>
                                </a>
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">JOINT University Preliminary <br> Examination Board</p>

                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-br-primary rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
{{--                            <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>--}}
                            <img style="height: 50px; width: 50px" src="{{ asset('images/logo.jpeg') }}" />

                            <div class="mg-l-20">
                                <a href="{{ route('admission.start','ijmb') }}">
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">IJMB APPLICATION</p>
                                </a>
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">INTERIM JOINT MATRICULATION BOARD PROGRAMME</p>

                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
            </div>
        </div>
        @endif

    </div>
@endsection
