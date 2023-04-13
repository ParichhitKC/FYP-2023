@extends('layouts.backend')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show hotel Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hotelG.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $hotelG->hotel->title }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 3:</strong>
                {{ $hotelG->image_2 }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 3:</strong>
                {{ $hotelG->image_2 }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 3:</strong>
                {{ $hotelG->image_3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 3:</strong>
                {{ $hotelG->image_4 }}
            </div>
        </div>

@endsection
