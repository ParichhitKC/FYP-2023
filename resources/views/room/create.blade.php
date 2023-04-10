@extends('layouts.backend')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Room</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('room.index') }}"> Back</a>
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


    <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="price">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room Type:</strong>
                    <textarea type="text" name="room_type" class="form-control" placeholder="Name"></textarea>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Hotel:</strong>
                        <select class="form-control" name="hotel_id">
                            <option>SELECT FROM LIST</option>
                            @foreach($hotel as $hotels)
                                <option value="{{$hotels->id}}">{{$hotels->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Room Image:</strong>
                        <input type="file" name="room_image" placeholder="Choose file" id="room">
                        @error('room')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


    </form>

@endsection
