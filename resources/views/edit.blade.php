
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Editar Ativos</title>
</head>
<body>

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




