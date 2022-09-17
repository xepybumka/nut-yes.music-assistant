@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div>
        <h1>{{$album->name}}</h1>
        <p>{{$album->description}}</p>
        <div>
            <img src="{{asset('storage').'/'.$album->image}}" class="img-fluid img-thumbnail">
        </div>
    </div>

    <div>
        <h1>{{ $album->author->name}}</h1>
        <div>
            <img src="{{asset('storage').'/'.$album->author->image}}" class="img-fluid img-thumbnail">
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location='{{route('authors.show', ['id'=>$album->author->id])}}'">View</button>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
