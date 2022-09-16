@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div>
        <h1>{{$album->name}}</h1>
        <div>
            <img src="{{asset('storage').'/'.$album->image}}" class="img-fluid img-thumbnail">
        </div>
    </div>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
