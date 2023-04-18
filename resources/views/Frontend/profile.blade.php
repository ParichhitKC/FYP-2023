@extends('layouts.sidebar')
@section('contents')
    <div class="dashboard__main">
        <div class="dashboard__content bg-light-2">
            <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                <div class="col-auto">

                    <h1 class="text-30 lh-14 fw-600">Settings</h1>
                    <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

                </div>

                <div class="col-auto">

                </div>
            </div>
    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Personal Information</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">Change Password</button>
                </div>

            </div>
            <form action="{{route('updateProfile')}}" method="post">
                @csrf
            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="row y-gap-30 items-center">

                    <div class="border-top-light mt-30 mb-30"></div>

                    <div class="col-xl-9">
                        <div class="row x-gap-20 y-gap-20">

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" name="name" value="{{$user->name}}" required>
                                    <label class="lh-1 text-16 text-light-1">User Name</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="email" value="{{$user->email}}" required>
                                    <label class="lh-1 text-16 text-light-1">Email</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="phone" value="{{$user->phone}}" required>
                                    <label class="lh-1 text-16 text-light-1">Phone Number</label>
                                </div>

                            </div>
                    </div>

                </div>
                    </div>
                </div>

                <div class="tabs__pane -tab-item-3">
                    <div class="col-xl-9">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">

                                <div class="form-input ">
                                    <input id="current_password" name="current_password" placeholder="Current Password" type="password" required>
                                    <i class="bi bi-eye-slash" id="togglePassword" style="position: relative; right: 25px; top: 9px;"></i>
                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input id="password" name="password" placeholder="New Password" type="password" required>
                                    <i class="bi bi-eye-slash" id="togglePasswordNew" style="position: relative; right:25px; top: 9px"></i>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" required>
                                    <i class="bi bi-eye-slash" id="toggleConfirmPassword" style="position: relative; right: 25px; top:9px;  "></i>
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="row x-gap-10 y-gap-10">
                                    <div class="col-auto">

                                        <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                            Save Changes <div class="icon-arrow-top-right ml-15"></div>
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>

            <script>
                const togglePassword = document.querySelector("#togglePassword");
                const password = document.querySelector("#current_password");

                togglePassword.addEventListener("click", function () {
                    // toggle the type attribute
                    const type = password.getAttribute("type") === "password" ? "text" : "password";
                    password.setAttribute("type", type);

                    // toggle the icon
                    this.classList.toggle("bi-eye");
                });
            </script>
            <script>
                const togglePasswordNew = document.querySelector("#toggleConfirmPassword");
                const passwordNew = document.querySelector("#confirm_password");

                togglePasswordNew.addEventListener("click", function () {
                    // toggle the type attribute
                    const type = passwordNew.getAttribute("type") === "password" ? "text" : "password";
                    passwordNew.setAttribute("type", type);

                    // toggle the icon
                    this.classList.toggle("bi-eye");
                });

            </script> <script>
                const toggleNewPassword = document.querySelector("#togglePasswordNew");
                const Newpassword = document.querySelector("#password");

                toggleNewPassword.addEventListener("click", function () {
                    // toggle the type attribute
                    const type = Newpassword.getAttribute("type") === "password" ? "text" : "password";
                    Newpassword.setAttribute("type", type);

                    // toggle the icon
                    this.classList.toggle("bi-eye");
                });

            </script>
@endsection

