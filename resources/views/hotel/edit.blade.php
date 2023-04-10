@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hotel.index') }}"> Back</a>
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


    <form action="{{ route('hotel.update',$hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Name" value="{{$hotel->title}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Destination:</strong>
                    <select class="form-control" name="destination_id">
                        <option>SELECT FROM LIST</option>
                        @foreach($destination as $destinations)
                            <option value="{{$destinations->id}}">{{$destinations->district}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Hotel Image:</strong>
                    <input type="file" name="hotel_image" placeholder="Choose file" id="hotel">
                    @error('hotel')
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
