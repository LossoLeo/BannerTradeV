<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Preenchimento</title>
    <script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center">
                <a class="navbar-brand" href="/">Trade de Valor</a>
                @auth
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Apresentador {{ Auth::user()->name }}</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/addativos/create" class="nav-link">Adicionar Ativo</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/banner" class="nav-link">Banner</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/bannerlive" class="nav-link">Live</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{url('edit-ativos')}}" class="nav-link">Editar ativos</a>
                    </li>
                    <li class="navbar-item">
                        <form action="logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                Sair</a>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
        <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
            <ul class="navbar-nav mr-auto text-center">
                @guest
                    <li class="navbar-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                @endguest
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook mr-1"></i></a> </li>
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a> </li>
            </ul>
        </div>
    </nav>

</header>

<form action="/addativos" method="POST">
    @csrf
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
            <div class='i i-login'></div><h2>Ativo</h2>
        </div>
        <div class='box-login'>
         <div class='fieldset-body' id='login_form'>
            <p class='field'>
            <label for='nomeativo'>Ativo</label>
             <input type='text' id='nomeativo' name='nomeativo' title='Nomeativo' placeholder="Digite o ativo" required>
             <span id='valida' class='i i-warning'></span>
             </p>
      	<p class='field'>
          <label for='minutagem'>Minutagem</label>
          <input type='text' id='pass' name='minutagem' title='Minutagem' placeholder="Digite a minutagem" required>
          <span id='valida' class='i i-close'></span>
        </p>
        	<input type='submit' name="do_login" id='do_login' value='Adicionar'>
      </div>
    </div>
    </div>
</form>
</body>
</html>
