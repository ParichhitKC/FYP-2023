@extends('layouts.frontend')
@section('contents')

    <div class="header-margin"></div>
<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-9 col-lg-8">

                @foreach($destination as $destinations)
        <div class="col-12">

            <div class="border-top-light pt-30">
                <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="{{asset('images/'.$destinations->title_image)}}" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                        </div>

                    </div>

                    <div class="col-md">
                        <p class="text-14 lh-14 mb-5">6+ hours</p>
                        <h3 class="text-18 lh-16 fw-500">{{$destinations->name}}</h3>
                        <p class="text-14 lh-14 mt-5">{{$destinations->zone}}</p>

                        <div class="text-14 lh-15 fw-500 mt-20">Taking safety measures</div>
                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">Free cancellation</div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                        <div class="d-flex x-gap-5 items-center justify-end md:justify-start">
                            <i class="icon-star text-10 text-yellow-1"></i>
                            <div class="text-15 fw-500 ml-5">4.82</div>
                            <div class="text-14 text-light-1">94 reviews</div>
                        </div>

                        <a href="{{route('front.viewDestination',$destinations->slug)}}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                            View Detail <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>
@endsection
