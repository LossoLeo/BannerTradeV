<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Criar Live</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <style>
        html, body {
            min-height: 100%;
        }
        body {
            background: #003daa; /* Fallback for browsers that don't support gradients */
            font-family: "Varela Round", sans-serif;
            background: linear-gradient(#a1b2d0, #003daa)  no-repeat;
        }
        .form-control {
            border-color: #d7d7d7;
            box-shadow: none;
        }
        .form-control:focus, .btn:focus {
            border-color: #003daa;
            box-shadow: 0 0 8px #003daa;
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
            background: rgba(0, 61, 170, 0.26);
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

</script>
<div class="contact-form">
    <form action="/addlives" method="POST">
        @csrf
        <h1>Criar Live</h1>
        <p class="hint-text"><br></p>
        <div class="form-group">
            <label for="apresentador">Qual o Apresentador?</label>
            <select name="apresentador" id="apresentador">
                <option value="Felipe_Dabul">Felipe Dabul</option>
                <option value="Eron_Borges">Eron Borges</option>
            </select>
            <span id='valida' class='i i-warning'></span>
        </div>
        <div class="form-group">
            <label for="lives">Qual a live?</label>
            <select name="nomelive" id="nomelive">
                <option value="fechamento_publica">Análise de Fechamento - Pública</option>
                <option value="position_trade">Position Trade</option>
                <option value="position_americana">Position Trade Mercado Americano</option>
                <option value="tira_duvidas">Espaço Tira Dúvidas</option>
                <option value="fechamento_pt1">Análise de Fechamento - Parte 1</option>
            </select>
        </div>
        <div class="form-group">
            <label for ="data_live">Data da live</label>
            <input type="date" id="data_live" name="data_live">
        </div>
        <input type='submit' class="btn btn-primary btn-block" name="do_login" id='do_login' value='Gravar e ir para adicionar ativos' >
    </form>
</div>
</body>
</html>
