@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div class="container">
        @if(session('success')) <strong> {{session('success')}} </strong>@endif
    </div>
    <form method="post" action="{{route('albums.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Название альбома:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Какое-то название альбома">
        </div>
        <div class="form-group">
            <label for="description">Описание альбома:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Какое-то описание альбома">
        </div>
        <div class="form-group">
            <label for="author_id">Автор альбома:</label>
            <select class="custom-select custom-select-lg mb-3" id="author_id" name="author_id" style="width: 100%;">
                <option selected>Выберите автора альбома</option>
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="custom-file-label" for="image">Изображение для альбома</label>
            <div>
                <input type="file" class="form-control" id="image" name ="image">
                <label class="custom-file-label" for="image">Выберите изображение для альбома</label>
            </div>
            <small id="image-hint" class="form-text text-muted">Вы можете загрузить изображения форматов: jpg, jpeg, png</small>
        </div>
        <button type="submit" class="btn btn-primary">Добавить альбом</button>
    </form>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
