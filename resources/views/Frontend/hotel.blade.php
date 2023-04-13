@extends('layouts.frontend')
@section('contents')

    <div class="header-margin"></div>
<section class="py-10 d-flex items-center bg-light-2">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <div class="">Home</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="">{{$hotel->destination->name}}</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="text-dark-1">{{$hotel->title}}, a Tribute Portfolio Hotel, {{$hotel->destination->name}}</div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <a href="{{route('front.hotelList')}}" class="text-14 text-blue-1 underline">All Hotel in London</a>
            </div>
        </div>
    </div>
</section>

<div class="singleMenu js-singleMenu">
    <div class="singleMenu__content">
        <div class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-auto">
                    <div class="singleMenu__links row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <a href="#overview">Overview</a>
                        </div>
                        <div class="col-auto">
                            <a href="#rooms">Rooms</a>
                        </div>
                        <div class="col-auto">
                            <a href="#reviews">Reviews</a>
                        </div>
                        <div class="col-auto">
                            <a href="#facilities">Facilities</a>
                        </div>
                        <div class="col-auto">
                            <a href="#faq">Faq</a>
                        </div>
                    </div>
                </div>

{{--                <div class="col-auto">--}}
{{--                    <div class="row x-gap-15 y-gap-15 items-center">--}}
{{--                        <div class="col-auto">--}}
{{--                            <div class="text-14">--}}
{{--                                From--}}
{{--                                <span class="text-22 text-dark-1 fw-500">${{$room->price}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-auto">--}}

{{--                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">--}}
{{--                                Select Room <div class="icon-arrow-top-right ml-15"></div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<section class="pt-40">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="row x-gap-20  items-center">
                    <div class="col-auto">
                        <h1 class="text-30 sm:text-25 fw-600">{{$hotel->title}}</h1>
                    </div>

                    <div class="col-auto">

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                    </div>
                </div>

                <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1">
                            <i class="icon-location-2 text-16 mr-5"></i>
                            {{$hotel->destination->name}}, {{$hotel->destination->district}}, {{$hotel->destination->zone}}
                        </div>
                    </div>

                    <div class="col-auto">
                        <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="row x-gap-15 y-gap-15 items-center">
                    <div class="col-auto">
                        <div class="text-14">
                            From
{{--                            <span class="text-22 text-dark-1 fw-500">${{$hotel->price}}</span>--}}
                        </div>
                    </div>

                    <div class="col-auto">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Select Room <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="galleryGrid -type-1 pt-30">
            <div class="galleryGrid__item relative d-flex">
                <img src={{asset('images/'.$hotel->hotel_image)}} alt="image" class="rounded-4">

                <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                    <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
                        <i class="icon-heart text-16"></i>
                    </button>
                </div>
            </div>

            <div class="galleryGrid__item">
                <img src="{{asset('images/'.$gallery->image_1)}}" alt="image" class="rounded-4">
            </div>

            <div class="galleryGrid__item relative d-flex">
                <img src="{{asset('images/'.$gallery->image_2)}}" alt="image" class="rounded-4">

            </div>

            <div class="galleryGrid__item">
                <img src="{{asset('images/'.$gallery->image_3)}}" alt="image" class="rounded-4">
            </div>

            <div class="galleryGrid__item relative d-flex">
                <img src="{{asset('images/'.$gallery->image_4)}}" alt="image" class="rounded-4">

                <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
{{--                    <a href="img/gallery/1/1.png" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">--}}
{{--                        See All 90 Photos--}}
{{--                    </a>--}}
{{--                    <a href="img/gallery/1/2.png" class="js-gallery" data-gallery="gallery2"></a>--}}
{{--                    <a href="img/gallery/1/3.png" class="js-gallery" data-gallery="gallery2"></a>--}}
{{--                    <a href="img/gallery/1/4.png" class="js-gallery" data-gallery="gallery2"></a>--}}
{{--                    <a href="img/gallery/1/5.png" class="js-gallery" data-gallery="gallery2"></a>--}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-8">
                <div class="row y-gap-40">
                    <div class="col-12">
                        <h3 class="text-22 fw-500">Property highlights</h3>
                        <div class="row y-gap-20 pt-30">

                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-city text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">In London City Centre</div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-airplane text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">Airport transfer</div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-bell-ring text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">Front desk [24-hour]</div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-tv text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">Premium TV channels</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="overview" class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Overview</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            You can directly book the best price if your travel dates are available, all discounts are already included. In the following house description you will find all information about our listing.
                            <br><br>
                            2-room terraced house on 2 levels. Comfortable and cosy furnishings: 1 room with 1 french bed and radio. Shower, sep. WC. Upper floor: (steep stair) living/dining room with 1 sofabed (110 cm, length 180 cm), TV. Exit to the balcony. Small kitchen (2 hot plates, oven,
                        </p>
                        <a href="#" class="d-block text-14 text-blue-1 fw-500 underline mt-10">Show More</a>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Most Popular Facilities</h3>
                        <div class="row y-gap-10 pt-20">

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-no-smoke"></i>
                                    <div class="text-15">Non-smoking rooms</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-wifi"></i>
                                    <div class="text-15">Free WiFi</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-parking"></i>
                                    <div class="text-15">Parking</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-kitchen"></i>
                                    <div class="text-15">Kitchen</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-living-room"></i>
                                    <div class="text-15">Living Area</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-shield"></i>
                                    <div class="text-15">Safety &amp; security</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="px-24 py-20 rounded-4 bg-green-1">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="flex-center size-60 rounded-full bg-white">
                                        <i class="icon-star text-yellow-1 text-30"></i>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                                    <div class="text-15 lh-15">7 travelers have booked today.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="ml-50 lg:ml-0">
                    <form method="POST" action="{{ route('front.check',$hotel->slug) }}" >
                        @csrf
                    <div class="px-30 py-30 border-light rounded-4 shadow-4">
                        <div class="d-flex items-center justify-between">
                            <div class="">
                                <span class="text-20 fw-500">US$72</span>
                                <span class="text-14 text-light-1 ml-5">nights</span>
                            </div>

                            <div class="d-flex items-center">
                                <div class="text-14 text-right mr-10">
                                    <div class="lh-15 fw-500">Exceptional</div>
                                    <div class="lh-15 text-light-1">3,014 reviews</div>
                                </div>

                                <div class="size-40 flex-center bg-blue-1 rounded-4">
                                    <div class="text-14 fw-600 text-white">4.8</div>
                                </div>
                            </div>
                        </div>

                        <div class="row y-gap-20 pt-30">
                            <div class="col-12">


                                        <div class="form-group">
                                            <label for="checkin">Check-in:</label>
                                            <div class="input-group date" id="checkin" data-target-input="nearest">
                                                <input type="date" class="form-control datetimepicker-input" id="check-in" name="checkin"  value="{{$checkinDate}}" data-target="#checkin"  required>
                                                <div class="input-group-append" data-target="#checkin" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout">Check-out:</label>
                                            <div class="input-group date" id="checkout" data-target-input="nearest">
                                                <input type="date" class="form-control datetimepicker-input" id="check-out" name="checkout"  value="{{$checkoutDate}}" data-target="#checkout" required>
                                                <div class="input-group-append" data-target="#checkout" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                            </div>

                            <div class="col-12">

                                <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">

                                    <div data-x-dd-click="searchMenu-guests">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-count-adult">2</span> adults
                                            -
                                            <span class="js-count-child">1</span> childeren
                                            -
                                            <span class="js-count-room">1</span> room
                                        </div>
                                    </div>


                                    <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Adults</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">2</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 lh-12 fw-500">Children</div>
                                                    <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Rooms</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <button class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white"  type="submit">
                                    Check availability
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="rooms" class="pt-30">
    <div class="container">
        <div class="row pb-20">
            <div class="col-auto">
                <h3 class="text-22 fw-500">Available Rooms</h3>
            </div>
        </div>

        <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20 mt-20">
            @if(count($availableRooms)>0)
            @foreach($availableRooms as $rooms)
            <div class="row y-gap-20">

                <div class="col-12">
                    <h3 class="text-18 fw-500 mb-15">{{$rooms->room_type}}</h3>
                    <div class="roomGrid">
                        <div class="roomGrid__header">
                            <div>Room Type</div>
                            <div>Benefits</div>
                            <div>Sleeps</div>
                            <div>Price for 5 nights</div>
                            <div>Select Rooms</div>
                            <div></div>
                        </div>

                        <div class="roomGrid__grid">
                            <div>
                                <div class="ratio ratio-1:1">
                                    <img src="{{asset('images/'.$rooms->room_image)}}" alt="image" class="img-ratio rounded-4">
                                </div>

                                <div class="y-gap-5 mt-20">

                                    <div class="d-flex items-center">
                                        <i class="icon-no-smoke text-20 mr-10"></i>
                                        <div class="text-15">Non-smoking rooms</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-wifi text-20 mr-10"></i>
                                        <div class="text-15">Free WiFi</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-parking text-20 mr-10"></i>
                                        <div class="text-15">Parking</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-kitchen text-20 mr-10"></i>
                                        <div class="text-15">Kitchen</div>
                                    </div>

                                </div>

                                <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                            </div>

                            <div class="y-gap-30">

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">{{$rooms->price}}</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">${{$rooms->price}}</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-1-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div>

                                <div class="text-14 lh-1">3 rooms for</div>
                                <div class="text-22 fw-500 lh-17 mt-5">{{$rooms->price}}</div>


                                <a href="{{route('front.booking',$rooms->id)}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-10">
                                    Reserve <div class="icon-arrow-top-right ml-15"></div>
                                </a>


                                <div class="text-15 fw-500 mt-30">You'll be taken to the next step</div>

                                <ul class="list-disc y-gap-4 pt-5">

                                    <li class="text-14">Confirmation is immediate</li>

                                    <li class="text-14">No registration required</li>

                                    <li class="text-14">No booking or credit card fees!</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
                <h1> No room available </h1>
            @endif
        </div>
    </div>
</section>


<section class="layout-pt-md layout-pb-md bg-dark-2">
    <div class="container">
        <div class="row y-gap-30 justify-between items-center">
            <div class="col-auto">
                <div class="row y-gap-20  flex-wrap items-center">
                    <div class="col-auto">
                        <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                    </div>

                    <div class="col-auto">
                        <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                        <div class="text-white">Sign up and we'll send the best deals to you</div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                    <div>
                        <input class="bg-white h-60" type="text" placeholder="Your Email">
                    </div>

                    <div>
                        <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
</body>
{{--    <script>--}}
{{--        function myFunction(element) {--}}
{{--            const checkin=element.value;--}}
{{--            localStorage.setItem('checkin',checkin);--}}
{{--            var checkIn =localStorage.getItem('checkin');--}}
{{--            document.getElementById("check-in").value = checkIn;--}}
{{--        }--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        function Function(element) {--}}
{{--            const checkout = element.value;--}}
{{--            localStorage.setItem('checkout', checkout);--}}
{{--            // const checkOut = localStorage.checkout;--}}
{{--            // debugger;--}}
{{--            document.getElementById("check-out").value = localStorage.checkout;--}}
{{--            console.log(localStorage.checkout)--}}
{{--        }--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        document.addEventListener("load", function(){--}}
{{--            var check_out = localStorage.getItem("checkout");--}}
{{--            console.log(check_out);--}}
{{--            let checkout_input = document.getElementById("check-out");--}}
{{--            console.log(checkout_input);--}}
{{--            // document.getElementById("check-out").value = check_out;--}}

{{--        });--}}
{{--    </script>--}}

