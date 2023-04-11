@extends('layouts.sidebar')
@section('contents')
    <div class="dashboard__main">
        <div class="dashboard__content bg-light-2">
            <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                <div class="col-auto">
<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            <div class="col-auto">
                <button
                    class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                    data-tab-target=".-tab-item-1">All Booking</button>
            </div>



        </div>



            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                    <table class="table-3 -border-bottom col-12">
                        <thead class="bg-light-2">
                        <tr>
                            <th>Hotel Name</th>
                            <th>Room ID</th>
                            <th>Room Type</th>
                            <th>Check in</th>
                            <th>Check Out</th>
                            <th>Total</th>
                            <th>Invoice</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($booking as $bookings)
                        <tr>
                            <td>{{$bookings->room->hotel->title}}</td>
                            <td>{{$bookings->room_id}}</td>
                            <td>{{$bookings->room->room_type}}</td>
                            <td>{{$bookings->checkin}}</td>
                            <td class="lh-16">{{$bookings->checkout}}</td>
                            <td class="fw-500">{{$bookings->price}}</td>

                            <td>
                                <a href="{{route('booking.viewInvoice',$bookings->id)}}">
                                    <button>View Invoice</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

</div>
@endsection
