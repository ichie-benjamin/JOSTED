@extends('layouts.verify')

@section('content')
    <div class="ht-100v d-flex align-items-center justify-content-center">
        <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
            <h3 class="tx-40 tx-xs-40 tx-normal tx-inverse tx-roboto mg-b-0 mb-2">{{ __('Verify Your Email Address') }}</h3>

            @if (session('resent'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p class="tx-16 mg-b-30"> {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}</p>

            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>

        </div>
    </div><!-- ht-100v -->
@endsection

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
