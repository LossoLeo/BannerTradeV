<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


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

    .add-ativos{
        font-size: 30px;
        background-color: rgba(255, 255, 255, 0.2);
        color: black;
    }


    .btn-primary{
        background-color: black;
    }

    .btn-primary.cadastro{
        padding: 10px;
        font-size: 25px;
        background-color: black;
    }

</style>
<body>
<header>
    <div class="w3-top">
        <div class="w3-bar w3-card" style="background-color: #000000" id="myNavbar">
            <a href="#" class="w3-bar-item w3-button w3-wide"><img src="{{asset('img/logotrade.png')}}"></a>
            <!-- Right-sided navbar links -->
            @auth
                <div class="w3-hide-small" style="margin-left: 25%">
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

<center><div class="container">
    <div class="row">
        Pesquisar dia;<form action="{{route('pesquisa', ['id' => $id_live])}}" method="POST" class="form-inline" style="width: 35%">
        @csrf
            <div class="form-group row">
                <div class="col-10">
                <input class="form-control" type="date" id="example-date-input" name="busca">
                </div>
            </div><br><br>
            <button type="submit" class="btn btn-primary">Procurar</button>&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </div>
</center>
</div>
<br><br><br>
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary cadastro" data-toggle="modal" data-target="#exampleModal">
    Cadastrar novo ativo
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form action="{{route('createativo', ['id' => $id_live])}}" method="POST">
                        @csrf
                        <h1>Cadastrar um novo ativo</h1>
                        <p class="hint-text">Para minutagem, usar somente números<br></p>
                        <div class="form-group">
                            <label for="minutagem">Minutagem</label>
                            <input type="text" class="form-control" id="minutagem" name='minutagem'
                                   onkeypress= "$(this).mask('00:00:00', {reverse: true});"
                                   title='Minutagem' placeholder='Digite a minutagem' required>
                        </div><br>
                        <div class="form-group">
                            <label for="nomeativo">Ativo</label>
                            <input type="text" id='nomeativo' name='nomeativo' title='Nomeativo' placeholder="Digite o ativo" class="form-control" required>
                            <span id='valida' class='i i-warning'></span>
                        </div>
                        <br><br>
                        <center><input type='submit' class="btn btn-primary btn-block" ; name="do_login" id='do_login' value='Adicionar' ></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
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
