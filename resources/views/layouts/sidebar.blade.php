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


<body data-barba="wrapper">


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


<div class="header-margin"></div>
<header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="-left-side">
            <a href="{{route('welcome')}}" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="{{asset('assets/img/general/Travel.svg')}}" alt="logo icon">
            </a>
        </div>
        <div class="row justify-between items-center pl-60 lg:pl-20">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <button data-x-click="dashboard">
                        <i class="icon-menu-2 text-20"></i>
                    </button>

                    <div class="single-field relative d-flex items-center md:d-none ml-30">
                        <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
                        <button class="absolute d-flex items-center h-full">
                            <i class="icon-search text-20 px-15 text-dark-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
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
                                    <li>
                                        <a href="{{route('front.profile')}}">
                                            Profile
                                        </a>
                                    </li>


                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
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
            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">



            </div>
        </div>
    </div>
</header>

<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">
        <div class="sidebar -dashboard">

            <div class="sidebar__item">
                <div class="sidebar__button -is-active">
                    <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/compass.svg" alt="image" class="mr-15">
                        Dashboard
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-booking.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/booking.svg" alt="image" class="mr-15">
                        Booking History
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-wishlist.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/bookmark.svg" alt="image" class="mr-15">
                        Wishlist
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-settings.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/gear.svg" alt="image" class="mr-15">
                        Settings
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@yield('contents')
</body>

<script src="{{asset('assets/js/vendors.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</html>
