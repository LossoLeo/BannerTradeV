
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Editar Ativos</title>
</head>

<style>

    .w3-bar .w3-button {
        padding-top: 10px;
        margin-left:10px;
        margin-right:10px;
        margin-top: 15px;
        color: white;
    }

    body,h1,h2,h3,h4,h5,h6 {
        font-family: "Raleway", sans-serif;
        font-size: 15px;
        background-color: #ffffff;
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    img{
        margin-top: -5px;
    }


    td,th {
      font-size: 20px;
    }

</style>

<body>

<div class="w3-top">
    <div class="w3-bar w3-card" style="background-color: #000000" id="myNavbar">
        <a href="/" class="w3-bar-item w3-button w3-wide"><img src="{{asset('img/logotrade.png')}}"></a>
        <!-- Right-sided navbar links -->
        @auth
            <div class="w3-hide-small" style="margin-left: 45%">
                <a href="/conta" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }}</a>
                <a href="/addativos/create" class="w3-bar-item w3-button"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Adicionar Ativo</a>
                <a href="/banner" class="w3-bar-item w3-button"><i class="fa fa-line-chart" aria-hidden="true"></i> Lista de Ativos</a>
                <a href="/bannerlive" class="w3-bar-item w3-button"><i class="fa fa-television" aria-hidden="true"></i> Live</a>
                <a href="{{url('edit-ativos')}}" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar ativos</a>
                <form action="logout" method="POST">
                    @csrf
                    <a href="/logout" class="w3-bar-item w3-button" onclick="event.preventDefault();
                     this.closest('form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                </form>
                @endauth
                @guest
                    <a href="/login" class="w3-bar-item w3-button">Entrar</a>
                @endguest
            </div>


            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
    </div>

</div>



<br><br><br><br><br>
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
        <td>{{ date('d-M-y', strtotime($event->created_at)) }}</td>
        <td><button type="submit" class="btn " data-toggle="modal" data-target="#update{{$event->id}}"style="background-color: #603fb9 ; color: white">Editar</button></td>
        <td><button type="submit" class="btn " data-toggle="modal" data-target="#delete{{$event->id}}"style="background-color: #603fb9 ; color: white">Apagar</button></td>

        <div class="modal fade" id="update{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar ativo {{$event->nomeativo}} adicionado em {{ date('d-M-y', strtotime($event->created_at)) }}</h5>
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
                            <br>
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
                                <label for="">Excluir {{$event->nomeativo}} criado em {{ date('d-M-y', strtotime($event->created_at)) }} da lista de ativos?</label>
                            </div>
                        <br>
                            <center><button type="submit" class="btn btn-primary">Sim</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </tr>
    @endforeach
<br>
</body>
</html>




