<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Banner para a live</title>
</head>

<body>
<style>

li{
  display: inline-block;
}



body{
    width: 100%;
}



.container{
    width: 100%;
    overflow: auto;
    white-space: nowrap;
    margin: 0 auto;
  }

.container-a{
  display: inline-block;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  margin: 0 auto;
}

.order{

  margin-top:37%; 

}


</style>

<script>
//funcao de atualizar pagina
  setTimeout(function () { document.location.reload(true); }, 90000);

</script>

<div class="order">
  <h2 align="center">Ativos Explicados</h2>
    <div class="container" id="ativos">
      
      <div class="container-a">
      <marquee behavior="alternate" direction="up" width="80%">
	    <marquee direction="left" behavior="alternate" scrolldelay=90 loop="" Scrollamount=10>{{$palavra}}</marquee>
      </marquee>
      </div>
      <!-- @foreach($events as $event)
        <li><div class="container-a"><marquee>({{$event->nomeativo}} - {{$event->minutagem}})</marquee></div></li>
      @endforeach --> 
    </div>
</div>
</body>
</html>