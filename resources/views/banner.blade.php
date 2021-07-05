<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ativos</title>
</head>
<style>
    body,h1,h2,h3,h4,h5,h6 {
        font-family: "Raleway", sans-serif;
        background-color: #ffffff;
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    .w3-bar .w3-button {
        padding-top: 10px;
        margin-left:10px;
        margin-right:10px;
        margin-top: 15px;
        color: white;
        font-size: 18px;
    }

    img{
        margin-top: -5px;
    }

    .col-10 {
        flex: 0 0 auto;
        width: 100%;
    }

    .row{
        margin-left: 30%;
    }


</style>
<body>
<header>
    <div class="w3-top">
        <div class="w3-bar w3-card" style="background-color: #000000" id="myNavbar">
            <a href="/" class="w3-bar-item w3-button w3-wide"><img src="{{asset('img/logotrade.png')}}"></a>
            <!-- Right-sided navbar links -->
            @auth
                <div class="w3-hide-small" style="margin-left: 40%">
                    <a href="{{route('createativos', ['id' => $id_live])}}" class="w3-bar-item w3-button"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Adicionar Ativo</a>
                    <a href="{{ route('banner', ['id' => $id_live]) }}" class="w3-bar-item w3-button"><i class="fa fa-line-chart" aria-hidden="true"></i> Lista de Ativos</a>
                    <a href="{{ route('bannerlive', ['id' => $id_live]) }}" class="w3-bar-item w3-button"><i class="fa fa-television" aria-hidden="true"></i> Live</a>
                    <a href="{{route('edit-ativos', ['id' => $id_live])}}" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar ativos</a>
                    <a href="#modalTroca" class="w3-bar-item w3-button" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar Live</a>
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
<br><br><br>
</header>
<!-- Modal -->
<div class="modal fade" id="modalTroca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar Live</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('inicio')}}" method="POST">
                    @csrf
                    <label for="lives">Qual a live?</label>
                    <select name="id_live" id="id_live" required>
                        @foreach($lives as $live)
                            <option value="{{ $live->id }}">{{ $live->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    //setTimeout(function () { document.location.reload(true); }, 10000);
    //<label for="example-date-input" class="col-2 col-form-label"></label>

</script>
<br><br><br>
<div class="container">
    <div class="row">
        Pesquisar dia;<form action="{{route('pesquisa', ['id' => $id_live])}}" method="POST" class="form-inline" style="width: 35%">
        @csrf
            <div class="form-group row">
                <div class="col-10">
                <input class="form-control" type="date" id="example-date-input" name="busca">
                </div>
            </div>
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
