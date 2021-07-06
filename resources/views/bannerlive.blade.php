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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&display=swap" rel="stylesheet">
    <script src="marquee.js"></script>

    <title>Banner para a live</title>
</head>

<body>
<style>

li{
  display: inline-block;
}



body{
    width: 100%;
    background-color: #06191f;
}



.container{
    width: 100%;
    overflow: auto;
    white-space: nowrap;
    margin: 0 auto;
  }

.containermenor{
    width: 100%;
    overflow: auto;
    white-space: nowrap;
    margin: 0 auto;
    background-color: rgb(6, 25, 31);
    width: 100%;
}


.container-a{
    width: 100%;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    margin: 0 auto;
    color: #ffffff;
    font-weight: bold;
    font-family: 'Barlow', sans-serif;
    font-size: 24px;
    padding: 5px;
    height: 45px;
    position: relative;

}

.order{

  margin-top:37%;

}

marquee{
    background-color: rgb(6, 25, 31);
    width: 100%;
}


</style>

<script>
//funcao de atualizar pagina
  setTimeout(function () { document.location.reload(true); }, 150000);

</script>



@if($tam <= 8)
<div class="order">
    <div class="containermenor" id="ativos">
        <div class="container-a">
            &nbsp&nbsp&nbsp&nbsp&nbsp {{$palavra}} &nbsp&nbsp&nbsp&nbsp
        </div>
    </div>
    @endif
    @if($tam > 8 && $tam <= 15)
            <div class="order">
                <div class="container" id="ativos">
                    <div class="container-a">
                        <marquee behavior="alternate" direction="up" width="80%">
                            <marquee direction="left" scrolldelay=90 loop="10" Scrollamount=7> &nbsp&nbsp&nbsp&nbsp&nbsp {{$palavra}}&nbsp&nbsp&nbsp&nbsp </marquee>
                        </marquee>
                    </div>
                </div>
                @endif
                @if($tam > 15 && $tam <= 30 )
                    <div class="order">
                        <div class="container" id="ativos">
                            <div class="container-a">
                                <marquee behavior="alternate" direction="up" width="80%">
                                    <marquee direction="left" scrolldelay=90 loop="10" Scrollamount=12> &nbsp&nbsp&nbsp&nbsp&nbsp {{$palavra}}&nbsp&nbsp&nbsp&nbsp </marquee>
                                </marquee>
                            </div>
                        </div>
                        @endif
                        @if($tam > 30 && $tam <= 60)
                            <div class="order">
                                <div class="container" id="ativos">
                                    <div class="container-a">
                                        <marquee behavior="alternate" direction="up" width="80%">
                                            <marquee direction="left" scrolldelay=90 loop="10" Scrollamount=20> &nbsp&nbsp&nbsp&nbsp&nbsp {{$palavra}}&nbsp&nbsp&nbsp&nbsp </marquee>
                                        </marquee>
                                    </div>
                                </div>
                                @endif
                                @if($tam > 60)
                                    <div class="order">
                                        <div class="container" id="ativos">
                                            <div class="container-a">
                                                <marquee behavior="alternate" direction="up" width="80%">
                                                    <marquee direction="left" scrolldelay=90 loop="10" Scrollamount=20> &nbsp&nbsp&nbsp&nbsp&nbsp {{$palavra}}&nbsp&nbsp&nbsp&nbsp </marquee>
                                                </marquee>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
</div>


</body>
</html>
