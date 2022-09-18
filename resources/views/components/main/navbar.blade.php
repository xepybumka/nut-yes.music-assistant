<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Music assistant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('authors.index') }}">Исполнители</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('albums.index') }}">Альбомы</a>
            </li>
        </ul>
        <span class="navbar-text">
            @if (Auth::user())
                Вы зашли как {{Auth::user()->name}}
            @else
                Вы зашли как <b>Гость.</b> <a class="nav-link" href="{{ route('login') }}">Авторизоваться?</a>
            @endif
        </span>
        @if (Auth::user())
            <form method="POST" action="{{ route('logout') }}" style="margin-left: 10px">
                @csrf
                <button type="submit" class="btn btn-primary">Выйти</button>
            </form>
        @endif
    </div>
</nav>
