<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


        <title>Inicio-Trade De Valor</title>

        <link rel="stylesheet" href="css/styleswelcome.css">

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                <ul class="navbar-nav ml-auto text-center">
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
                </ul>
            </div>
            <div class="mx-auto my-2 order-0 order-md-1 position-relative">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
                <ul class="navbar-nav mr-auto text-center">
                    @guest
                        <li class="navbar-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                    @endguest
                </ul>
                <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook mr-1"></i></a> </li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a> </li>
                </ul>
            </div>
        </nav>
    </header>
        <h1 align="center">Trade de Valor</h1>
        <img src="logotrade.png">
        <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    </body>
</html>
