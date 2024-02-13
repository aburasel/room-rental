@extends('layouts.guest')

@section('content')
    <div class="row">
        <div class="col col-lg-9 mx-auto">
            <div class="card-body">
                <div class="col">
                    <h6> {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </h6>
                </div>
                <hr />
                <div class="row row-cols-auto g-3">
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div class="col">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-dark px-5">
                                        {{ __('Resend Verification Email') }}</button>
                                </div>

                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="row row-cols-auto g-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger px-5">
                                        {{ __('Log Out') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
@endsection
