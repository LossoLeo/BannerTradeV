<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Adicionar Ativo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.time').mask('00:00:00');
        });
    </script>


    <style>
        html, body {
            min-height: 100%;
        }
        body {
            background: #b7c1f1; /* Fallback for browsers that don't support gradients */
            font-family: "Varela Round", sans-serif;
            background: linear-gradient(#b7c1f1, #5e81ff)  no-repeat;
        }
        .form-control {
            border-color: #d7d7d7;
            box-shadow: none;
        }
        .form-control:focus, .btn:focus {
            border-color: #a177ff;
            box-shadow: 0 0 8px #c2a8ff;
        }
        .contact-form {
            width: 500px;
            margin: 0 auto;
            padding: 40px 0;
        }
        .contact-form form {
            background: #fff;
            padding: 40px;
            border-radius: 6px;
        }
        .contact-form h1 {
            text-align: center;
            font-size: 50px;
            margin: 0 0 15px;
        }
        .contact-form .form-group {
            margin-bottom: 20px;
        }
        .contact-form .form-control, .contact-form .btn  {
            border-radius: 2px;
            min-height: 40px;
            transition: all 0.5s;
            outline: none;
        }
        .contact-form .btn {
            background: #91a0ec;
            font-size: 16px;
            min-height: 50px;
            border: none;
        }
        .contact-form .btn:hover, .contact-form .btn:focus {
            background: #1e2cde;
            outline: none;
        }
        .contact-form .btn i {
            margin-right: 5px;
        }
        .contact-form label {
            color: #bbb;
            font-weight: normal;
        }
        .contact-form textarea {
            resize: vertical;
        }
        .hint-text {
            font-size: 18px;
            text-align: center;
            padding-bottom: 25px;
            opacity: 0.5;
        }

    </style>
</head>
<body>
<div class="contact-form">
    <form action="/addativos" method="POST">
        @csrf
        <h1>Cadastrar um novo ativo</h1>
        <p class="hint-text">Para minutagem, usar o formato abaixo<br>min:seg</p>
        <div class="form-group">
            <label for="nomeativo">Ativo</label>
            <input type="text" id='nomeativo' name='nomeativo' title='Nomeativo' placeholder="Digite o ativo" class="form-control" required>
            <span id='valida' class='i i-warning'></span>
        </div>
        <div class="form-group">
            <label for="minutagem">Minutagem</label>
            <input type="text" class="form-control" id="minutagem" name='minutagem' title='Minutagem' placeholder='Digite a minutagem' required>
        </div>
        <input type='submit' class="btn btn-primary btn-block" name="do_login" id='do_login' value='Adicionar' >
    </form>
</div>
</body>
</html>
