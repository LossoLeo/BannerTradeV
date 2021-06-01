<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Banner</title>
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

<script>

    //setTimeout(function () { document.location.reload(true); }, 10000);
    //<label for="example-date-input" class="col-2 col-form-label"></label>

</script>
<br><br><br>
<div class="container">
    <div class="row">
        Pesquisar dia&nbsp;&nbsp;&nbsp;&nbsp;<form action="{{route('pesquisa')}}" method="POST" class="form-inline" style="width: 50%">
        @csrf
            <div class="form-group row">
                <div class="col-10">
                <input class="form-control" type="date" id="example-date-input" name="busca">
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Procurar</button>&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </div>
</div><br><br><br>

<h2 align="center">Ativos da live do dia {{ $data}}</h2><br><br>
<table border="0" width="100%" cellpadding="10">
<tr>
<div class="container">
    <td width="50%" valign="top">
        <h2>Ativos para Comentário Fixado</h2>
        @foreach($events as $event)
            <li>{{ $event->nomeativo}} - {{ $event->minutagem}}</li>
        @endforeach
    </td>

    <td width="50%" valign="top">
        <h2>Ativos para Descrição</h2>
        @foreach($events as $event)
            <li>{{ $event->minutagem}} - {{ $event->nomeativo}}</li>
        @endforeach
    </td>
    <div id="dados"></div>
</div>

</tr>
</table>

</body>
</html>
