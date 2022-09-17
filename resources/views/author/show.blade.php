@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div class="container">
        @if(session('success')) <h1 class="text-center"><strong> {{session('success')}} </strong></h1>@endif
    </div>
    <div>
        <h1>{{$author->name}}</h1>
        <div>
            <img src="{{asset('storage').'/'.$author->image}}" class="img-fluid img-thumbnail">
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @forelse($author->albums as $album)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"  style="height: 225px; width: 100%; display: block;" src="{{asset('storage').'/'.$album->image}}" alt="{{$album->name}}" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">{{$album->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location='{{route('albums.show', ['id'=>$album->id])}}'">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
