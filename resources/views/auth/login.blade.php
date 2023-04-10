@extends('layouts.frontend')
@section('contents')
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <div class="row y-gap-20">
                        <div class="col-12">
                            <h1 class="text-22 fw-500">Welcome back</h1>
                            <p class="mt-10">Don't have an account yet? <a href="{{route('register')}}" class="text-blue-1">Sign up for free</a></p>
                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="lh-1 text-14 text-light-1">Password</label>
                            </div>

                        </div>
{{--                            <div class="col-12 wrap">--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        <div class="col-12">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif                        </div>

                        <div class="col-12">
                            <button type="submit" class="button col-12 -outline-blue-1 text-blue-1 py-15 rounded-8 mt-10">
                                Login
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
                            <div class="text-center px-30">By creating an account, you agree to our Terms of Service and Privacy Statement.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
@endsection
