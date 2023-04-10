@extends('layouts.backend')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show destination</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('destination.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $destination->name }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>District:</strong>
                {{ $destination->district }}
            </div>
        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zone:</strong>
                {{ $destination->zone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stories Image:</strong>
                {{ $destination->stories_image }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Image:</strong>
                {{ $destination->title_image }}
            </div>
        </div>
    </div>
@endsection
