<!DOCTYPE html>
<html lang="pt-br">
<title>Inicio-Trade de Valor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<style>
    body,h1,h2,h3,h4,h6 {
        font-family: "Raleway", sans-serif;
        font-size: 15px;
        background-color: black;
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("{{asset('img/logo_trade_azul.png')}}");
        min-height: 100%;
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
        horiz-align: center;
    }

    .login_button{
        margin-left: 50%;
        font-size: 20px;
    }


</style>

<body>
<!-- Navbar (sit on top) -->
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
            <a href="{{route('trocar-live')}}" class="w3-bar-item w3-button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar Live</a>
            <form action="logout" method="POST">
                @csrf
                <a href="/logout" class="w3-bar-item w3-button" onclick="event.preventDefault();
                     this.closest('form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
            </form>
            @endauth
            @guest
                <div class="login_button">
                    <a href="/login" class="w3-bar-item w3-button">Login</a>
            @endguest
                </div>
        </div>


        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black" style="padding: 8px">
    <p>Agência Hey <i class="fa fa-copyright" aria-hidden="true"></i> - Guarapuava</p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>


</body>
</html>




