@extends('layouts.guest')

@section('content')
    <div class="card-body">
        <div class="border p-4 rounded">
            <div class="text-center">
                <h3 class="">Sign in</h3>
                <p>Don't have an account yet? Create an account.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-grid">
                        <a class="btn my-4 shadow-sm btn-white" href="{{ route('users.register_user') }}"> <span
                                class="d-flex justify-content-center align-items-center">
                                <span>Renter</span>
                            </span>
                        </a> 
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-grid">
                        <a class="btn my-4 shadow-sm btn-white" href="{{ route('users.register_rental_owner') }}"> <span
                                class="d-flex justify-content-center align-items-center">
                                <span>Rental Owner</span>
                            </span>
                        </a> 
                    </div>
                </div>
            </div>
            
                
            {{-- <div class="d-grid">
                <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                        class="d-flex justify-content-center align-items-center">
                        <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                        <span>Sign in with Google</span>
                    </span>
                </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with
                    Facebook</a>
            </div> --}}
            <div class="login-separater text-center mb-4"> <span>SIGN IN WITH EMAIL</span>
                <hr />
            </div>
            <div class="form-body">
                <form class="row g-3" action="{{ route('users.login') }}" method="POST">
                    @csrf
                    <div class="col-12  has-validation">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name ="email" id="email" placeholder="Email address"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback  d-block">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Enter Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control border-end-0" id="password" name="password"
                                value="12345678" placeholder="Enter Password" required>
                            <a href="javascript:;" class="input-group-text bg-transparent" value="{{ old('password') }}"><i
                                    class='bx bx-hide'></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me" checked />
                            <label class="form-check-label" for="remember_me">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
