@extends('layouts.frontend')
@section('contents')
    <div class="header-margin" xmlns="http://www.w3.org/1999/html"></div>
    <form method="post" action="{{route('front.confirm')}}">
        @csrf
    <section class="pt-40">
    <div class="container">
        <div class="row x-gap-40 y-gap-30 items-center">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1">
                        <i class="icon-check text-16 text-white"></i>
                    </div>
                    <div class="text-18 fw-500 ml-10">Your selection</div>
                </div>
            </div>

            <div class="col">
                <div class="w-full h-1 bg-border"></div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">2</div>
                    <div class="text-18 fw-500 ml-10">Your details</div>
                </div>
            </div>

            <div class="col">
                <div class="w-full h-1 bg-border"></div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">3</div>
                    <div class="text-18 fw-500 ml-10">Final step</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40 layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="py-15 px-20 rounded-4 text-15 bg-blue-1-05">
                    Sign in to book with your saved details or
                    <a href="#" class="text-blue-1 fw-500">register</a>
                    to manage your bookings on the go!
                </div>

                <h2 class="text-22 fw-500 mt-40 md:mt-24">Let us know who you are</h2>

                <div class="row x-gap-20 y-gap-20 pt-20">
                    <div class="col-12">
                        <div class="form-input ">
                            <input type="text"  required value="{{Auth::check() ? Auth::user()->name: ''}}" >
                            <label class="lh-1 text-16 text-light-1">Full Name</label>

                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-input ">
                            <input type="text" required value="{{$room->id}}" name="room_id" >
                            <label class="lh-1 text-16 text-light-1">Room No.</label>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-input ">
                            <input type="text" required value="{{$room->hotel->id}}" name="hotel_id">
                            <label class="lh-1 text-16 text-light-1">Hotel Name</label>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-input ">
                            <input type="text" required value="{{$room->room_type}}" name="room_type">
                            <label class="lh-1 text-16 text-light-1">Room_type</label>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-input ">
                            <input type="text" value="{{Auth::check() ? Auth::user()->phone: ''}}" required>
                            <label class="lh-1 text-16 text-light-1">Phone Number</label>
                        </div>

                    </div>


                    <div class="col-12">

                        <div class="form-input ">
                            <textarea rows="6"></textarea>
                            <label class="lh-1 text-16 text-light-1">Special Requests</label>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="row y-gap-20 items-center justify-between">
                            <div class="col-auto">
                                <div class="text-14 text-light-1">
                                    By proceeding with this booking, I agree to Travel Terms of Use and Privacy Policy.
                                </div>
                            </div>

                            <div class="col-auto">

                                <button class="button col-12 -outline-blue-1 text-red-1 py-15 rounded-8 mt-15" type="submit">
                                    Next: Final details <div class="icon-arrow-top-right ml-15"></div>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row y-gap-30 pt-40">
                    <div class="col-12">
                        <div class="px-24 py-20 rounded-4 bg-green-1">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="flex-center size-60 rounded-full bg-white">
                                        <i class="icon-star text-yellow-1 text-30"></i>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>


</div>


                <div class="w-full h-1 bg-border mt-40 mb-40"></div>



</div>
            <div class="col-xl-5 col-lg-4">
                <div class="ml-80 lg:ml-40 md:ml-0">
                    <div class="px-30 py-30 border-light rounded-4">
                        <div class="text-20 fw-500 mb-30">Your booking details</div>

                        <div class="row x-gap-15 y-gap-20">
                            <div class="col-auto">
                                <img src="{{asset('images/'.$room->room_image)}}" alt="image" class="size-140 rounded-4 object-cover">
                            </div>

                            <div class="col">
                                <div class="d-flex x-gap-5 pb-10">

                                    <i class="icon-star text-yellow-1 text-10"></i>

                                    <i class="icon-star text-yellow-1 text-10"></i>

                                    <i class="icon-star text-yellow-1 text-10"></i>

                                    <i class="icon-star text-yellow-1 text-10"></i>

                                    <i class="icon-star text-yellow-1 text-10"></i>

                                </div>

                                <div class="lh-17 fw-500">{{$room->hotel->title}}</div>
                                <div class="text-14 lh-15 mt-5">{{$room->hotel->destination->name}}</div>

                                <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-30 flex-center bg-blue-1 rounded-4">
                                                <div class="text-12 fw-600 text-white">4.8</div>
                                            </div>

                                            <div class="text-14 fw-500 ml-10">Exceptional</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14">3,014 reviews</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top-light mt-30 mb-20"></div>

                        <div class="row y-gap-20 justify-between">
                            <div class="col-auto">
                                <div class="text-15">Check-in</div>
                                <div class="fw-500" name="checkin">{{$checkinDate}}</div>
                                <div class="text-15 text-light-1">15:00 – 23:00</div>
                            </div>

                            <div class="col-auto md:d-none">
                                <div class="h-full w-1 bg-border"></div>
                            </div>

                            <div class="col-auto text-right md:text-left">
                                <div class="text-15">Check-out</div>
                                <div class="fw-500" name="checkout">{{$checkoutDate}}</div>
                                <div class="text-15 text-light-1">01:00 – 11:00</div>
                            </div>
                        </div>

                        <div class="border-top-light mt-30 mb-20"></div>

                        <div class="">
                            <div class="text-15">Total length of stay:</div>
                            <div class="fw-500">9 nights</div>
                            <a href="#" class="text-15 text-blue-1 underline">Travelling on different dates?</a>
                        </div>

                        <div class="border-top-light mt-30 mb-20"></div>

                        <div class="row y-gap-20 justify-between items-center">
                            <div class="col-auto">
                                <div class="text-15">You selected:</div>
                                <div class="fw-500">{{$room->room_type}}</div>
                                <a href="#" class="text-15 text-blue-1 underline">Change your selection</a>
                            </div>

                            <div class="col-auto">
                                <div class="text-15">1 room, 4 adult</div>
                            </div>
                        </div>
                    </div>

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="text-20 fw-500 mb-20">Your price summary</div>

                        <div class="row y-gap-5 justify-between">
                            <div class="col-auto">
                                <div class="text-15">{{$room->room_type}}</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-15" name="price">{{$room->price}}</div>
                            </div>
                        </div>

                        <div class="row y-gap-5 justify-between pt-5">
                            <div class="col-auto">
                                <div class="text-15">Taxes and fees</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-15">{{$room->price*13/100}}</div>
                            </div>
                        </div>

                        <div class="row y-gap-5 justify-between pt-5">
                            <div class="col-auto">
                                <div class="text-15">Booking fees</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-15">FREE</div>
                            </div>
                        </div>

                        <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                            <div class="row y-gap-5 justify-between">
                                <div class="col-auto">
                                    <div class="text-18 lh-13 fw-500">Total</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-18 lh-13 fw-500">{{}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="text-20 fw-500 mb-20">Your payment schedule</div>

                        <div class="row y-gap-5 justify-between">
                            <div class="col-auto">
                                <div class="text-15">Before you stay you'll pay</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-15">US$4,047</div>
                            </div>
                        </div>
                    </div>

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="text-20 fw-500 mb-15">Do you have a promo code?</div>


                        <div class="form-input ">
                            <input type="text">
                            <label class="lh-1 text-16 text-light-1">Enter promo code</label>
                        </div>


                        <button class="button -outline-blue-1 text-blue-1 px-30 py-15 mt-20">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Why Choose Us</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-40 justify-between pt-50">

            <div class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="img/featureIcons/1/1.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="img/featureIcons/1/2.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="img/featureIcons/1/3.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
    </form>
@endsection
