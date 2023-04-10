@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit destination</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('destination.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('destination.update',$destination->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <textarea type="text" name="name" class="form-control" placeholder="Name">{{$destination->name}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stories:</strong>
                    <textarea type="text" name="stories" class="form-control" placeholder="Stories">{{$destination->stories}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>District:</strong>
                    <textarea type="text" name="district" class="form-control" placeholder="District">{{$destination->district}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zone:</strong>
                    <textarea type="text" name="zone" class="form-control" placeholder="Zone">{{$destination->zone}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Stories Image:</strong>
                    <input type="file" name="stories_image" placeholder="Choose file" id="destination">
                    @error('destination')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title Image:</strong>
                    <input type="file" name="title_image" placeholder="Choose file" id="destination">
                    @error('destination')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
