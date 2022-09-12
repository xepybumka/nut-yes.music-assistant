@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    {{ $albums->links('components.main.pagination') }}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Author</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($albums as $album)
                            <tr>
                                <th scope="row">{{$album->id}}</th>
                                <td class="w-25">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
                                </td>
                                <td>{{$album->name}}</td>
                                <td>{{$album->description}}</td>
                                <td>{{$album->author_id}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $albums->links('components.main.pagination') }}
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
