@extends('layouts.backend')
@push('css')
@include('datatable.datatablecss')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>activity</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('activity.create') }}"> Create New activity</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered wrap" id="zero-config">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>start date</th>
            <th>end date</th>
            <th>Destination</th>
            <th>Image 1</th>
            <th>Image 2</th>
            <th>Image 3</th>
            <th>Image 4</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($activity as $activitys)
            <tr>
                <td>{{$activitys->id }}</td>
                <td>{{$activitys->name }}</td>
                <td>{{$activitys->description }}</td>
                <td>{{$activitys->price}}</td>
                <td>{{$activitys->start_date}}</td>
                <td>{{$activitys->end_date}}</td>
                <td>{{$activitys->destination->name}}</td>

                <td><img src="{{asset('images/'.$activitys->image_1)}}" style="max-width: 100px;"> </td>
                <td><img src="{{asset('images/'.$activitys->image_2)}}" style="max-width: 100px;"> </td>
                <td><img src="{{asset('images/'.$activitys->image_3)}}" style="max-width: 100px;"> </td>
                <td><img src="{{asset('images/'.$activitys->image_4)}}" style="max-width: 100px;"> </td>
                <td>
                    <form action="{{ route('activity.destroy',$activitys->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('activity.show',$activitys->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('activity.edit',$activitys->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {!! $activity->links() !!}
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        });
    </script>


@endsection

@push('script')
@include('datatable.datatable')


@endpush
