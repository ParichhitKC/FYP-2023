@extends('layouts.frontend')
@section('contents')
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <div class="row y-gap-20">
                        <div class="col-12">
                            <h1 class="text-22 fw-500">Sign in or create an account</h1>
                            <p class="mt-10">Already have an account? <a href="{{route('login')}}" class="text-blue-1">Log in</a></p>
                        </div>

                        <div class="col-12">

                            <div class="form-input ">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                <label class="lh-1 text-14 text-light-1"> Name</label>
                            </div>

                        </div>


                        <div class="col-12">
                            <div class="form-input ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="lh-1 text-14 text-light-1">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-input ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="lh-1 text-14 text-light-1">Password</label>
                            </div>
                        </div>
                            <div class="col-12">
                            <div class="form-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label class="lh-1 text-14 text-light-1" for="password-confirm">Confirm Password</label>
                            </div>
                        </div>

                        <div class="col-12">

                            <div class="form-input ">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="lh-1 text-14 text-light-1"> Phone </label>
                            </div>

                        </div>

                        <div class="col-12">
                            <button class="button col-12 -outline-blue-1 text-red-1 py-15 rounded-8 mt-15">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="row y-gap-20 pt-30">
                        <div class="col-12">
                            <div class="text-center">or sign in with</div>
                            <button class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                <i class="icon-apple text-15 mr-10"></i>
                                Google
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="text-center px-30">By signing in, I agree to Travel Terms of Use and Privacy Policy.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>
@endsection
