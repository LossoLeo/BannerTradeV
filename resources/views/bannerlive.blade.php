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

body{
    width: 1920px;
}


.container{
    width: 1920px;
    padding-right: 10%;
    margin-right: 50%;
    margin-top: 35%;
}

.carousel_slide,
.carousel-inner{
    width: 1920px;
}



</style>
<div class="container">
  <h2>Ativos explicados</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-interval="1000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        @foreach($events as $event)
            <td>({{$event->nomeativo}} - {{$event->minutagem}}) - </td>
        @endforeach
      </div>
    </div>
  </div>
</div>
</body>
</html>