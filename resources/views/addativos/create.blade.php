<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Preenchimento</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

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
