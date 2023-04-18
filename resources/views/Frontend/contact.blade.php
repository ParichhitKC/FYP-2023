@extends('layouts.frontend')
@section('contents')
    <div class="header-margin" xmlns="http://www.w3.org/1999/html"></div>
    <div class="ratio ratio-16:9">
        <div class="map-ratio">
            <div class="map js-map-single"></div>
        </div>
    </div>
<section>
    <div class="relative container">
        <div class="row justify-end">
            <div class="col-xl-5 col-lg-7">
                <form action="{{route('front.contact.submit')}}" method="post">@csrf
                <div class="map-form px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
                    <div class="text-22 fw-500">
                        Send a message
                    </div>

                    <div class="row y-gap-20 pt-20">
                        <div class="col-12">

                            <div class="form-input ">
                                <input type="text" name="name" required>
                                <label class="lh-1 text-16 text-light-1">Full Name</label>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <input type="email" name="email" required>
                                <label class="lh-1 text-16 text-light-1">Email</label>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <input type="text" name="subject" required>
                                <label class="lh-1 text-16 text-light-1">Subject</label>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <textarea required rows="4" name="message"></textarea>
                                <label class="lh-1 text-16 text-light-1">Your Messages</label>
                            </div>

                        </div>
                        <div class="col-auto">

                            <button type="submit" class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                                Send a Messsage <div class="icon-arrow-top-right ml-15"></div>
                            </button>

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
</section>
@endsection
