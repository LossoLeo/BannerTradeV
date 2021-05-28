<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Banner</title>
</head>
<body>
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
