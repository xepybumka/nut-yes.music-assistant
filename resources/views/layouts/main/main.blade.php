<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Music assistant</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
              integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel=""
    </head>
    <body>
        <header class="header">
            @yield('navbar')
        </header>
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">{{$title}}</h1>
                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>

        </main>

        <footer role="contentinfo" class="footer">
            @yield('footer')
        </footer>
    </body>
</html>
