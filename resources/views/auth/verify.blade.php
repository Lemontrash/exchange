

@extends('forms')


@section('title')
    Registration
@endsection
@yield('headAssetsSection')

@section('content')

    <div id="registrationWrapper">
        <h1>Verify Your Email Address</h1>

            <div class="inputRow">
                <div class="formInner">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a style="text-decoration: underline; color: grey" href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.

                </div>

            </div>

    </div>
@endsection

