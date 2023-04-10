@extends('layouts.backend')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show room</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('room.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $room->price }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>room Image:</strong>
                {{ $room->room_image }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room Type:</strong>
                {{ $room->room_type }}
            </div>
        </div>

@endsection
