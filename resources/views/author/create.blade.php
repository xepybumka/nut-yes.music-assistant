@extends('layouts.main.main')

@section('navbar')
    @include('components.main.navbar')
@endsection

@section('content')
    @if(session('success')) <strong> {{session('success')}} </strong>@endif
    <form method="post" action="{{route('authors.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Автор:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Имя/название автора">
        </div>
        <div class="form-group">
            <label class="custom-file-label" for="image">Изображение для автора</label>
            <div>
                <input type="file" class="form-control" id="image" name ="image">
                <label class="custom-file-label" for="image">Выберите изображение для автора</label>
            </div>
            <small id="image-hint" class="form-text text-muted">Вы можете загрузить изображения форматов: jpg, jpeg, png</small>
        </div>
        <button type="submit" class="btn btn-primary">Добавить автора</button>
    </form>
@endsection

@section('footer')
    @include('components.main.footer')
@endsection
