@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    <div class="container">
        @if(session('success')) <strong> {{session('success')}} </strong>@endif
    </div>
    <form method="post" action="{{route('authors.update', ['id'=>$author->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Обновление записи автора: {{$author->name}}</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Имя/название автора" value="{{$author->name}}">
        </div>
        <div class="form-group">
            <label class="custom-file-label" for="image">Изображение для автора</label>
            <div>
                <input type="file" class="form-control" id="image" name ="image">
                <label class="custom-file-label" for="image">Выберите изображение для автора</label>
            </div>
            <small id="image-hint" class="form-text text-muted">Вы можете загрузить изображения форматов: jpg, jpeg, png</small>
        </div>
        <button type="submit" class="btn btn-primary">Обновить автора</button>
    </form>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
