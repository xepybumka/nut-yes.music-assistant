@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div>
        <a href="{{ route('authors.create') }}">Добавить автора</a>
    </div>
    {{ $authors->links('components.main.pagination') }}
    <form class="form-inline" method="GET">
        <div class="form-group mb-2">
            <label for="filter" class="col-sm-2 col-form-label">Filter</label>
            <input type="text" class="form-control" id="filter" name="filter" placeholder="Author name..." value="{{$filter}}">
        </div>
        <button type="submit" class="btn btn-default mb-2">Filter</button>
    </form>
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
                    @foreach($authors as $author)
                        <tr>
                            <th scope="row">{{$author->id}}</th>
                            <td class="w-25">
                                <img src="{{asset('storage').'/'.$author->image}}" class="img-fluid img-thumbnail">
                            </td>
                            <td>{{$author->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $authors->links('components.main.pagination') }}
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
