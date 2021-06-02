
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Editar Ativos</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center">
                <a class="navbar-brand" href="/">Trade de Valor</a>
                @auth
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Apresentador {{ Auth::user()->name }}</a>
                    </li>
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

<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>

    @foreach($events as $event)
    <tr>
        <th scope="row">{{ $event->nomeativo}}</th>
        <td>{{ $event->minutagem}}</td>
        <td><button type="submit" class="btn " data-toggle="modal" data-target="#update{{$event->id}}"style="background-color: #603fb9 ; color: white">Editar</button></td>
        <td><button type="submit" class="btn " data-toggle="modal" data-target="#delete{{$event->id}}"style="background-color: #603fb9 ; color: white">Apagar</button></td>

        <div class="modal fade" id="update{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar ativo {{$event->nomeativo}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('edit' , ['id' => $event->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Alterar o nome do ativo</label>
                                <input type="text" class="form-control" id="nomeativo" name="nomeativo" placeholder="{{$event->nomeativo}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Altere a Minutagem</label>
                                <input type="text" class="form-control" id="minutagem" name="minutagem" placeholder="{{$event->minutagem}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('delete' , ['id' => $event->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Apagar {{$event->nomeativo}}?</label>
                            </div>
                            <center><button type="submit" class="btn btn-primary">Sim</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </tr>
    @endforeach

</body>
</html>




