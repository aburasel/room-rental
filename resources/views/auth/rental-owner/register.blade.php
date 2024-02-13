@extends('layouts.guest')

@section('content')
    <div class="card-body">
        <div class="border p-4 rounded">
            <div class="text-center">
                <h3 class="">Sign Up</h3>
                <p>Already have an account? <a href="authentication-signin.html">Sign in
                        here</a>
                </p>
            </div>
            {{-- <div class="d-grid">
            <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                    class="d-flex justify-content-center align-items-center">
                    <img class="me-2" src="assets/images/icons/search.svg" width="16"
                        alt="Image Description">
                    <span>Sign Up with Google</span>
                </span>
            </a> <a href="javascript:;" class="btn btn-facebook"><i
                    class="bx bxl-facebook"></i>Sign Up with Facebook</a>
        </div> --}}
            <div class="login-separater text-center mb-4"> <span>SIGN UP WITH EMAIL</span>
                <hr />
            </div>
            <div class="form-body">
                <form class="row g-3" action="{{ route('users.register_rental_owner') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            placeholder="John Doe" required>
                    </div>
                    {{-- <div class="col-sm-6">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="email" class="form-control" id="inputFirstName"
                        placeholder="Jhon">
                </div>
                <div class="col-sm-6">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="email" class="form-control" id="inputLastName"
                        placeholder="Deo">
                </div> --}}
                    <div class="col-12">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name ="email" id="email"
                            placeholder="example@user.com" value="{{ old('email') }}" required>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control border-end-0" id="password" name="password"
                                value="12345678" placeholder="Enter Password" required>
                            <a href="javascript:;" class="input-group-text bg-transparent" value="{{ old('password') }}"><i
                                    class='bx bx-hide'></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control border-end-0" id="password_confirmation"
                                name="password_confirmation" value="12345678" placeholder="Confirm Password" required>
                            <a href="javascript:;" class="input-group-text bg-transparent"
                                value="{{ old('password_confirmation') }}"><i class='bx bx-hide'></i></a>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="country" class="form-label">Country</label>

                        <select class="form-select" id id="country" name="country" required>
                            @foreach (countries() as $country)
                                <option value="{{ $country['iso_3166_1_alpha2'] }}" @selected(old('iso_3166_1_alpha2') === $country['iso_3166_1_alpha2'])>
                                    {{ $country['name'] }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="condition_checked" name="condition_checked"
                                value="1" @checked(old('condition_checked')) required>
                            <label class="form-check-label" for="condition_checked">I
                                read and agree to Terms & Conditions</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
