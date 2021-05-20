<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Preenchimento</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div id="ativo-create-container" class="col-md-6 offset-md-3"></div>
        <center><h1>Adicionar o Ativo</h1>
        <form action="/addativos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeativo">Ativo:</label>
                <input type="text" class="form-control" id="nomeativo" name="nomeativo" placeholder="Digite o ativo" required>
            </div><br><br>
            <div class="form-group">
                <label for="minutagem">Minutagem:</label>
                <input type="text" class="form-control" id="minutagem" name="minutagem" placeholder="Digite a minutagem" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar">
        </form></center>
</body>
</html>
