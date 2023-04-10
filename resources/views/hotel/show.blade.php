@extends('layouts.backend')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hotel.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $hotel->title }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $hotel->price }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Destination:</strong>
                {{ $hotel->destination->name }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hotel Image:</strong>
                {{ $hotel->hotel_image }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room Type:</strong>
                {{ $hotel->room_type }}
            </div>
        </div>

@endsection
