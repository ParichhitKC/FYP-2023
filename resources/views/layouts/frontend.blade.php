<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">



    <title>Travel</title>
</head>

<body>
<div class="preloader js-preloader">
    <div class="preloader__wrap">
        <div class="preloader__icon">
            <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_41)">
                    <path d="M29.1559 0H22.9C12.4618 0 4 8.05887 4 18V23.958C4 33.8991 12.4618 41.958 22.9 41.958H29.1559C39.5941 41.958 48.0559 33.8991 48.0559 23.958V18C48.0559 8.05887 39.5941 0 29.1559 0Z" fill="#070707"/>
                </g>

                <defs>
                    <clipPath id="clip0_1_41">
                        <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>

    <div class="preloader__title">Travel</div>
</div>

<main>

    <header data-add-bg="bg-white" class="header  js-header" data-x="header" data-x-toggle="is-menu-opened">
        <div data-anim="fade" class="header__container container">
            <div class="row justify-between items-center">

                <div class="col-auto">
                    <div class="d-flex items-center">
                        <a href="{{route('welcome')}}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                            <img src="{{asset('assets/img/general/Travel.svg')}}" alt="logo icon">
                            <img src="{{asset('assets/img/general/Travel.svg')}}" alt="logo icon">
                        </a>


                        <div class="header-menu" data-x="mobile-menu" data-x-toggle="is-menu-active">
                            <div class="mobile-overlay"></div>

                            <div class="header-menu__content">
                                <div class="mobile-bg js-mobile-bg"></div>

                                <div class="menu js-navList">
                                    <ul class="menu__nav text-dark-1 -is-active">

                                        <li>
                                            <a data-barba href="{{route('welcome')}}">
                                                <span class="mr-10">Home</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('front.destinationList')}}">
                                                Destinations
                                            </a>
                                        </li>
                                        @if(auth::check())
                                        <li>
                                            <a href="{{route('front.profile')}}">
                                                Profile
                                            </a>
                                        </li>
                                        @endif
                                        <li>
                                            <a href="{{route('front.hotelList')}}">Hotel</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                        @guest()
                            @if (Route::has('login'))
                            <a href="{{route('login')}}" class="button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1">Login / Sign In</a>
                            @endif
                            @if(Route::has('register'))
                            <a href="{{route('register')}}" class="button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20">Sign Up / Register</a>                        </div>
                        @endif
                        <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                            <div><a href="{{route('login')}}" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                            <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                        </div>
                        @else
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="button px-30 fw-400 text-14 -outline-yellow-1 h-50 text-blue-1 ml-20" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf

                            </form>
                    </div>
                </div>
                @endguest
                    </div>
                </div>
    </header>
@yield('contents')
    <footer class="footer -type-2 bg-dark-2 text-white">
        <div class="container">
            <div class="pt-60 pb-60">
                <div class="row y-gap-40 justify-between xl:justify-start">
                    <div class="col-xl-4 col-lg-6">
                        <img src="img/general/logo-light.svg" alt="image">

                        <div class="row y-gap-30 justify-between pt-30">
                            <div class="col-sm-6">
                                <div class="text-14">Toll Free Customer Care</div>
                                <a href="#" class="text-18 fw-500 mt-5">+(1) 123 456 7890</a>
                            </div>

                            <div class="col-sm-5">
                                <div class="text-14">Need live support?</div>
                                <a href="#" class="text-18 fw-500 mt-5">hi@gotrip.com</a>
                            </div>
                        </div>

                        <div class="row x-gap-20 y-gap-15 pt-60">
                            <div class="col-12">
                                <h5 class="text-16 fw-500">Your all-in-one travel app</h5>
                            </div>

                            <div class="col-auto col-lg-6">
                                <div class="d-flex items-center px-20 py-10 rounded-4 bg-white-10">
                                    <div class="icon-apple text-24"></div>
                                    <div class="ml-20">
                                        <div class="text-14 lh-14">Download on the</div>
                                        <div class="text-15 lh-14 fw-500">Apple Store</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-auto col-lg-6">
                                <div class="d-flex items-center px-20 py-10 rounded-4 bg-white-10">
                                    <div class="icon-play-market text-24"></div>
                                    <div class="ml-20">
                                        <div class="text-14 lh-14">Get in on</div>
                                        <div class="text-15 lh-14 fw-500">Google Play</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-60">
                            <h5 class="text-16 fw-500 mb-10">Follow us on social media</h5>

                            <div class="d-flex x-gap-20 items-center">
                                <a href="#"><i class="icon-facebook text-14"></i></a>
                                <a href="#"><i class="icon-twitter text-14"></i></a>
                                <a href="#"><i class="icon-instagram text-14"></i></a>
                                <a href="#"><i class="icon-linkedin text-14"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row y-gap-30">
                            <div class="col-12">
                                <h5 class="text-16 fw-500 mb-15">Get Updates & More</h5>

                                <div class="single-field relative d-flex justify-end items-center pb-30">
                                    <input class="bg-white rounded-8" type="email" placeholder="Your Email">
                                    <button class="absolute px-20 h-full text-15 fw-500 underline text-dark-1">Subscribe</button>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <h5 class="text-16 fw-500 mb-30">Company</h5>
                                <div class="d-flex y-gap-5 flex-column">
                                    <a href="#">About Us</a>
                                    <a href="#">Careers</a>
                                    <a href="#">Blog</a>
                                    <a href="#">Press</a>
                                    <a href="#">Gift Cards</a>
                                    <a href="#">Magazine</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <h5 class="text-16 fw-500 mb-30">Support</h5>
                                <div class="d-flex y-gap-5 flex-column">
                                    <a href="#">Contact</a>
                                    <a href="#">Legal Notice</a>
                                    <a href="#">Privacy Policy</a>
                                    <a href="#">Terms and Conditions</a>
                                    <a href="#">Sitemap</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <h5 class="text-16 fw-500 mb-30">Other Services</h5>
                                <div class="d-flex y-gap-5 flex-column">
                                    <a href="#">Car hire</a>
                                    <a href="#">Activity Finder</a>
                                    <a href="#">Tour List</a>
                                    <a href="#">Flight finder</a>
                                    <a href="#">Cruise Ticket</a>
                                    <a href="#">Holiday Rental</a>
                                    <a href="#">Travel Agents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-20 border-top-white-15">
                <div class="row justify-between items-center y-gap-10">
                    <div class="col-auto">
                        <div class="row x-gap-30 y-gap-10">
                            <div class="col-auto">
                                <div class="d-flex items-center">
                                    © 2022 GoTrip LLC All rights reserved.
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex x-gap-15">
                                    <a href="#">Privacy</a>
                                    <a href="#">Terms</a>
                                    <a href="#">Site Map</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="row y-gap-10 items-center">
                            <div class="col-auto">
                                <div class="d-flex items-center">
                                    <button class="d-flex items-center text-14 fw-500 text-white mr-10">
                                        <i class="icon-globe text-16 mr-10"></i>
                                        <span class="underline">English (US)</span>
                                    </button>

                                    <button class="d-flex items-center text-14 fw-500 text-white">
                                        <i class="icon-usd text-16 mr-10"></i>
                                        <span class="underline">USD</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</main>






</body>

<script src="{{asset('assets/js/vendors.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</html>
