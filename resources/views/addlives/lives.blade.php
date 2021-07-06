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
            <select name="id_apresentador" id="id_apresentador" required>
                <option value="1">Felipe Dabul</option>
                <option value="2">Eron Borges</option>
                <option value="3">Mark</option>
            </select>
            <span id='valida' class='i i-warning'></span>
        </div>
        <div class="form-group">
            <label for="lives">Qual a live?</label>
        <select name="id_live" id="id_live" required>
            @foreach($lives as $live)
                <option value="{{ $live->id }}">{{ $live->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for ="data_live">Data da live</label>
            <input type="date" id="data_live" name="data_live" required>
        </div>
        <!--<input type='submit' class="btn btn-primary btn-block" name="do_login" id='do_login' value='Gravar e ir para adicionar ativos'>-->
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Gravar dados e ir para menu inicial
        </button></center>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirme a escolha da live</h5>
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
                    <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar Mudanças</button></center>
                </form>

            </div>

        </div>
    </div>
</div>
</body>
</html>
