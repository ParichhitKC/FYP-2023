@extends('layouts.frontend')
@section('contents')
    <div class="header-margin"></div>
<section data-anim="fade" class="d-flex items-center py-15 border-top-light is-in-view">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <div class="">{{$destinations->zone}}</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="">{{$destinations->district}}</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="text-dark-1">{{$destinations->name }}</div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" class="text-14 text-light-1">{{$destinations->name}}</a>
            </div>
        </div>
    </div>
</section>

<section class="layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="relative d-flex">
                    <img src="{{asset('images/'.$destinations->title_image)}}" alt="image" class="col-12 rounded-4">

                    <div class="absolute z-2 px-50 py-60">
                        <h1 class="text-50 fw-600 text-white">Explore {{$destinations->name}}</h1>
                        <div class="text-white">Explore deals, travel guides and things to do in {{$destinations->title}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row x-gap-20 y-gap-20 items-center pt-20">

            <div class="col">
                <button class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12">
                    <i class="icon-bed text-25 mb-10"></i>
                    Hotel
                </button>
            </div>

            <div class="col">
                <button class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12">
                    <i class="icon-destinations text-25 mb-10"></i>
                    Tour
                </button>
            </div>

        </div>

        <div class="row y-gap-20 pt-40">
            <div class="col-auto">
                <h2 class="">What to know before visiting {{$destinations->name}}</h2>
            </div>

            <div class="col-xl-8">
                <p class="text-15 text-dark-1">
                {!!$destinations->stories !!}
                </p>

                <a href="#" class="d-block text-14 fw-500 text-blue-1 underline mt-20">Show More</a>
            </div>

        <div class="pt-30 mt-30 border-top-light"></div>

        <div class="row y-gap-20">
            <div class="col-12">
                <h2 class="text-22 fw-500">Local weather</h2>
            </div>


            <div class="col-xl-3 col-6">
                <div class="text-15 lh-1 fw-500">
                    DEC - FEB
                </div>
                <div class="text-22 fw-500 mt-10">
                    7° <span class="text-light-1 ml-15">3°</span>
                </div>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15 lh-1 fw-500">
                    MAR - MAY
                </div>
                <div class="text-22 fw-500 mt-10">
                    17° <span class="text-light-1 ml-15">3°</span>
                </div>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15 lh-1 fw-500">
                    JUN - AUG
                </div>
                <div class="text-22 fw-500 mt-10">
                    27° <span class="text-light-1 ml-15">3°</span>
                </div>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15 lh-1 fw-500">
                    SEP - NOV
                </div>
                <div class="text-22 fw-500 mt-10">
                    7° <span class="text-light-1 ml-15">3°</span>
                </div>
            </div>

        </div>

        <div class="pt-30 mt-30 border-top-light"></div>

        <div class="row y-gap-20">
            <div class="col-12">
                <h2 class="text-22 fw-500">General info</h2>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15">Time Zone</div>
                <div class="fw-500">GMT +00:00</div>
                <div class="text-15 text-light-1">3 hours behind</div>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15">Currency</div>
                <div class="fw-500">British Pound</div>
                <div class="text-15 text-light-1">1USD = 0.76GBP</div>
            </div>

            <div class="col-xl-3 col-6">
                <div class="text-15">Best time to visit</div>
                <div class="row y-gap-20">
                    <div class="col-auto">
                        <div class="fw-500">JUN</div>
                        <div class="text-15 text-light-1">The Queen's Birthday</div>
                    </div>
                    <div class="col-auto">
                        <div class="fw-500">JUN</div>
                        <div class="text-15 text-light-1">The Queen's Birthday</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-30 border-top-light"></div>
    </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Recommended Hotels</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>

            <div class="col-auto">

                <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                    More <div class="icon-arrow-top-right ml-15"></div>
                </a>

            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">
            @foreach($hotels as $hotel)
            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="{{route('front.viewHotel',$hotel->slug)}}" class="hotelsCard -type-1 ">

                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="{{asset('images/'.$hotel->hotel_image)}}"  alt="image">
                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>
                    </div>


                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>{{$hotel->title}}</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">{{$hotel->destination->name}}</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>
                    </div>

                </a>
            </div>


            </div>
        @endforeach
        </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Most Popular Tours</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>

            <div class="col-auto">

                <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                    More <div class="icon-arrow-top-right ml-15"></div>
                </a>

            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">
        @foreach($activity as $activities)
            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="{{route('front.activity',$activities->slug)}}" class="tourCard -type-1 rounded-4 ">
                    <div class="tourCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('images/'.$activities->image_1)}}" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>



                    </div>

                    <div class="tourCard__content mt-10">
                        <div class="d-flex items-center lh-14 mb-5">
                            <div class="text-14 text-light-1">{{$activities->start_date}}</div>
                            <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                            <div class="text-14 text-light-1">Full-day Tours</div>
                        </div>

                        <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>{{$activities->name}}</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">{{$activities->destination->name}}</p>

                        <div class="row justify-between items-center pt-15">
                            <div class="col-auto">
                                <div class="d-flex items-center">
                                    <div class="d-flex items-center x-gap-5">

                                        <div class="icon-star text-yellow-1 text-10"></div>

                                        <div class="icon-star text-yellow-1 text-10"></div>

                                        <div class="icon-star text-yellow-1 text-10"></div>

                                        <div class="icon-star text-yellow-1 text-10"></div>

                                        <div class="icon-star text-yellow-1 text-10"></div>

                                    </div>

                                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="text-14 text-light-1">
                                    From
                                    <span class="text-16 fw-500 text-dark-1">NPR{{$activities->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </a>

            </div>



        </div>
    </div>
</section>
@endsection
