<!DOCTYPE html>
<html lang="en">
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
<a href="/addativos/create">Adicionar outro ativo</a>
<script>

    setTimeout(function () { document.location.reload(true); }, 5000);


</script>



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

<script>
    function atualizar(){

        //Fazer requisição pelo AJAX
        $.get('/banner', function(dados) {
        
        //exibir os ativos
            $('dados').html('<i>' + dados.nomeativo + dados.minutagem);

        }, 'JSON');
    }

//Definir o intervalo de atualizar a funcao
setInterval("atualizar()", 10000);

//Quando carregar a pagina
$(function(){
    //primeira atualizacao
    atualizar();
});

</script>


</body>
</html>
