@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit activity</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activity.index') }}"> Back</a>
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


    <form action="{{ route('activity.update',$activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="price" value="{{$activity->price}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="price" value="{{$activity->name}}">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="price" value="{{$activity->description}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start Date:</strong>
                    <input type="text" name="start_date" class="form-control" value="{{$activity->start_date}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>End Date:</strong>
                    <input type="text" name="end_date" class="form-control" value="{{$activity->end_date}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>destination:</strong>
                    <select class="form-control" name="destination_id">
                        <option>SELECT FROM LIST</option>
                        @foreach($destination as $destinations)
                            <option value="{{$destinations->id}}">{{$destinations->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Image 1:</strong>
                        <input type="file" name="image_1" placeholder="Choose file" id="activity">
                        @error('activity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Image 2:</strong>
                        <input type="file" name="image_2" placeholder="Choose file" id="activity">
                        @error('activity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Image 3:</strong>
                        <input type="file" name="image_3" placeholder="Choose file" id="activity">
                        @error('activity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><div class="col-md-12">
                    <div class="form-group">
                        <strong>Image 4:</strong>
                        <input type="file" name="image_4" placeholder="Choose file" id="activity">
                        @error('activity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
@endsection
