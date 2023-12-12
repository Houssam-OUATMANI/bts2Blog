<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Acceuil</a>
        @guest()
            <div>
                <a class="navbar-brand" href="{{route("auth.register")}}">Inscription</a>
                <a class="navbar-brand" href="{{route("auth.login")}}">Connexion</a>
            </div>
        @endguest
        @auth()
            <a class="navbar-brand" href="{{route("posts.create")}}">Ajouter une publication</a>
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                @method("delete")
                <button class="btn btn-warning" type="submit">Deconnexion</button>
            </form>
        @endauth
    </div>
</nav>

@include("components.flash")

    <div class="container">
        @yield("content")
    </div>
</body>
</html>
