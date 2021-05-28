<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


        <title>Trade de Valor</title>

        <link rel="stylesheet" href="css/styleswelcome.css">

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"></a>
                <ul class="navbar-nav">
                    @auth
                    <li class="navbar-item">
                        <a href="/addativos/create" class="nav-link">Adicionar Ativo</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/banner" class="nav-link">Banner</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/bannerlive" class="nav-link">Live</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{url('edit-ativos')}}" class="nav-link">Editar ativos</a>
                    </li>
                        <li class="navbar-item">
                            <form action="logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    Sair</a>
                            </form>
                        </li>
                    @endauth
                    @guest
                    <li class="navbar-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
        <h1 align="center">Bem vindo</h1>
        <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    </body>
</html>
