<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
}

.container-a{
  display: inline-block;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  direction: rlt;

}

</style>

<script>

setTimeout(function () { document.location.reload(true); }, 5000);


</script>

<div class="container">
  <h2><Center>Ativos Explicados</Center></h2>  
        @foreach($events as $event)
            <li><div class="container-a">({{$event->nomeativo}} - {{$event->minutagem}})</div></li>
        @endforeach
</div>
</body>
</html>