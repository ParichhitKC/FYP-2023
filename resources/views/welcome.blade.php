@extends('layouts.frontend')
@section('contents')

        <section data-anim-wrap class="masthead -type-6">
            <div data-anim-child="fade" class="masthead__bg bg-dark-3">
                <img src="{{asset('assets/img/masthead/2/22.jpg')}}" alt="image">
            </div>
            <div class="container">
                <div class="row justify-center">
                    <div class="col-xl-9">
                        <div class="text-center">
                            <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">The World is Waiting For You</h1>
                            <p data-anim-child="slide-up delay-5" class="text-white mt-5">Discover amzaing places</p>
                        </div>
                    </div>
                </div>
            </div>/
        </section>


<section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Popular Destinations</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
                </div>
            </div>

            <div class="col-auto">
                <a href="{{route('front.destinationList')}}" class="button -blue-1 -md bg-blue-1-05 text-blue-1">
                    View All Destinations
                    <i class="icon-arrow-top-right ml-10"></i>
                </a>
            </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1">
            <div class="swiper-wrapper">
                @foreach($popular_destination as $pop_dest)
                <div class="swiper-slide">

                    <a href="{{route('front.viewDestination',$pop_dest->slug)}}" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{asset('images/'.$pop_dest->title_image)}}"  alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">{{$pop_dest->name}}</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">{{$pop_dest->name}}</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1" >Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

                @endforeach

            </div>

            <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>
        </div>
    </div>
</section>



@endsection
