<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{asset("assets_back/assets/img/favicon.ico")}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href={{asset("assets_back/layouts/vertical-light-menu/css/light/loader.css")}} rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_back/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href={{asset("assets_back/assets/css/plugins.css")}} rel="stylesheet" type="text/css" />
    @stack('css')
    @stack('script')
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

{{--    <style>--}}
{{--        /*--}}
{{--            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it--}}
{{--        */--}}
{{--        /*.navbar .navbar-item.navbar-dropdown {--}}
{{--            margin-left: auto;--}}
{{--        }*/--}}
{{--        .layout-px-spacing {--}}
{{--            min-height: calc(100vh - 140px)!important;--}}
{{--        }--}}

{{--    </style>--}}

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="sidebar-noneoverflow">
<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="{{route('welcome')}}">
                    <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{route('welcome')}}" class="nav-link"> CORK </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>
            </li>
        </ul>

        <ul class="navbar-item flex-row navbar-dropdown ml-auto">

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="{{asset("assets_back/assets/img/profile-17.jpg")}}" class="img-fluid mr-2" alt="avatar">
                            <div class="media-body">
{{--                                <h5>{{ Auth::user()->name }} </h5>--}}
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{route('logout') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>

<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="profile-info">
                <figure class="user-cover-image"></figure>
                <div class="user-info">
                    <img src="{{asset("assets_back/assets/img/profile-17.jpg")}}" alt="avatar">
{{--                    <h6 class="">{{ Auth::user()->name }}</h6>--}}
                </div>
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu {{Request::is('hotel*') ? 'active' : ''}}">
                    <a href="{{route('hotel.index')}}" aria-expanded="{{Request::is('hotel*') ? 'true' : 'false'}}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Hotel</span>
                        </div>
                    </a>
                </li>


                <li class="menu {{Request::is('room*') ? 'active' : ''}}">
                    <a href="{{route('room.index')}}" aria-expanded="{{Request::is('room*') ? 'true' : 'false'}}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span> Room</span>
                        </div>
                    </a>
                </li>
                <li class="menu {{Request::is('HotelGallery*') ? 'active' : ''}}">
                    <a href="{{route('hotelG.index')}}" aria-expanded="{{Request::is('HotelGallery*') ? 'true' : 'false'}}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span> Hotel Gallery</span>
                        </div>
                    </a>
                </li>
                <li class="menu {{Request::is('DestinationGallery*') ? 'active' : ''}}">
                    <a href="{{route('destinationG.index')}}" aria-expanded="{{Request::is('DestinationGallery*') ? 'true' : 'false'}}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span> Destination Gallery</span>
                        </div>
                    </a>
                </li>
{{--

                {{--                <li class="menu">--}}
                {{--                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
                {{--                        <div class="">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>--}}
                {{--                            <span> Menu 2</span>--}}
                {{--                        </div>--}}
                {{--                        <div>--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                    <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">--}}
                {{--                        <li>--}}
                {{--                            <a href="javascript:void(0);"> Submenu 1 </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="javascript:void(0);"> Submenu 2 </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li class="menu">--}}
                {{--                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
                {{--                        <div class="">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>--}}
                {{--                            <span> Menu 3</span>--}}
                {{--                        </div>--}}
                {{--                        <div>--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                    <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">--}}
                {{--                        <li>--}}
                {{--                            <a href="javascript:void(0);"> Submenu 1 </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Submenu 2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>--}}
                {{--                            <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2">--}}
                {{--                                <li>--}}
                {{--                                    <a href="javascript:void(0);"> Sub-Submenu 1 </a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="javascript:void(0);"> Sub-Submenu 2 </a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="javascript:void(0);"> Sub-Submenu 3 </a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li class="menu active">--}}
                {{--                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
                {{--                        <div class="">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>--}}
                {{--                            <span>Starter Kit</span>--}}
                {{--                        </div>--}}
                {{--                        <div>--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="starter-kit" data-parent="#accordionExample">--}}
                {{--                        <li class="active">--}}
                {{--                            <a href="starter_kit_blank_page.html"> Blank Page </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="starter_kit_boxed.html"> Boxed </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="starter_kit_collapsible_menu.html"> Collapsible </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <!-- CONTENT AREA -->


            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area bx-top-6">
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>


            <!-- CONTENT AREA -->

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src={{asset("assets_back/assets/js/libs/jquery-3.1.1.min.js")}}></script>
<script src={{asset("assets_back/plugins/src/global/vendors.min.js")}}></script>
<script src={{asset("assets_back/bootstrap/js/popper.min.js")}}></script>
<script src={{asset("assets_back/bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("assets_back/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("assets_back/assets/js/app.js")}}></script>
<script src={{asset("assets_back/assets/js/custom.js")}}></script>
<script src={{asset("assets_back/layouts/vertical-light-menu/app.js")}}></script>



</body>

</html>
