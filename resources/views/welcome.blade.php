@extends('layouts.frontend')
@section('contents')
        <section data-anim-wrap class="masthead -type-6">
            <div data-anim-child="fade" class="masthead__bg bg-dark-3">
                <img src="{{asset('assets/img/masthead/6/bg.jpg')}}" alt="image">
            </div>
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

<section class="section-bg layout-pt-lg layout-pb-lg bg-light-2">
    <div class="section-bg__item col-12">
        <img src="img/backgrounds/testimonials/bg-2.svg" alt="image">
    </div>

    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Testimonials</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row justify-center pt-50 md:pt-30">
            <div class="col-xl-7 col-lg-10">
                <div class="overflow-hidden js-testimonials-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonials -type-2 text-center">
                                <div class="mb-40">
                                    <img src="img/misc/quote.svg" alt="quote">
                                </div>

                                <div class="text-22 md:text-18 fw-600 text-dark-1">
                                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                                </div>

                                <div class="mt-40">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonials -type-2 text-center">
                                <div class="mb-40">
                                    <img src="img/misc/quote.svg" alt="quote">
                                </div>

                                <div class="text-22 md:text-18 fw-600 text-dark-1">
                                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                                </div>

                                <div class="mt-40">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonials -type-2 text-center">
                                <div class="mb-40">
                                    <img src="img/misc/quote.svg" alt="quote">
                                </div>

                                <div class="text-22 md:text-18 fw-600 text-dark-1">
                                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                                </div>

                                <div class="mt-40">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonials -type-2 text-center">
                                <div class="mb-40">
                                    <img src="img/misc/quote.svg" alt="quote">
                                </div>

                                <div class="text-22 md:text-18 fw-600 text-dark-1">
                                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                                </div>

                                <div class="mt-40">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonials -type-2 text-center">
                                <div class="mb-40">
                                    <img src="img/misc/quote.svg" alt="quote">
                                </div>

                                <div class="text-22 md:text-18 fw-600 text-dark-1">
                                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                                </div>

                                <div class="mt-40">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pt-60 lg:pt-40">
                        <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                            <div class="col-auto">
                                <div class="pagination__item is-active">
                                    <img src="img/avatars/testimonials/1.png" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="img/avatars/testimonials/2.png" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="img/avatars/testimonials/3.png" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="img/avatars/testimonials/4.png" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="img/avatars/testimonials/5.png" alt="image">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Recommended Activity</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

            <div data-anim-child="slide-up delay-2" class="col-xl col-md-4 col-sm-6">

                <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
                    <div class="activityCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/activities/2/1.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    LIKELY TO SELL OUT*
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="activityCard__content mt-10">
                        <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                        <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                            <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                        </h4>

                        <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                        <div class="row justify-between items-center pt-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                                    <div class="text-14 text-light-1">
                                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                                        94 reviews
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-14 text-light-1">
                                    From <span class="text-16 fw-500 text-dark-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-up delay-3" class="col-xl col-md-4 col-sm-6">

                <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
                    <div class="activityCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/activities/2/2.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                        </div>

                    </div>

                    <div class="activityCard__content mt-10">
                        <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                        <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                            <span>Edinburgh Sky to Sea Bike Tour by Manual or E-Bike</span>
                        </h4>

                        <p class="text-light-1 text-14 lh-14 mt-5">Ciutat Vella, Barcelona</p>

                        <div class="row justify-between items-center pt-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                                    <div class="text-14 text-light-1">
                                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                                        94 reviews
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-14 text-light-1">
                                    From <span class="text-16 fw-500 text-dark-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-up delay-4" class="col-xl col-md-4 col-sm-6">

                <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
                    <div class="activityCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/activities/2/3.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                    Best Seller
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="activityCard__content mt-10">
                        <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                        <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                            <span>Natural Crystal Blue Ice Cave Tour of Vatnajökull Glacier</span>
                        </h4>

                        <p class="text-light-1 text-14 lh-14 mt-5">Manhattan, New York</p>

                        <div class="row justify-between items-center pt-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                                    <div class="text-14 text-light-1">
                                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                                        94 reviews
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-14 text-light-1">
                                    From <span class="text-16 fw-500 text-dark-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-up delay-5" class="col-xl col-md-4 col-sm-6">

                <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
                    <div class="activityCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/activities/2/4.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                    Top Rated
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="activityCard__content mt-10">
                        <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                        <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                            <span>South Coast Full Day Tour by Minibus from Reykjavik</span>
                        </h4>

                        <p class="text-light-1 text-14 lh-14 mt-5">Vaticano Prati, Rome</p>

                        <div class="row justify-between items-center pt-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                                    <div class="text-14 text-light-1">
                                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                                        94 reviews
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-14 text-light-1">
                                    From <span class="text-16 fw-500 text-dark-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-up delay-6" class="col-xl col-md-4 col-sm-6">

                <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
                    <div class="activityCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/activities/2/5.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    Likely to sell out
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="activityCard__content mt-10">
                        <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                        <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                            <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                        </h4>

                        <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                        <div class="row justify-between items-center pt-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                                    <div class="text-14 text-light-1">
                                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                                        94 reviews
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-14 text-light-1">
                                    From <span class="text-16 fw-500 text-dark-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</section>


@endsection
