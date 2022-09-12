<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
    <a class="navbar-brand" href="#" role="banner">Music assistant</a>
    <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('authors-all') }}">Исполнители</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('albums-all') }}">Альбомы</a>
            </li>
        </ul>
    </div>
</nav>
