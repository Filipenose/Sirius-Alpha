 
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
  <title>Cadastro de Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2>Digite as informações de cadastro</h2>
  <form action="Controle/CadastrarUsuario.php" method="POST" class="form-horizontal">
    <div class="form-group" >
      <label for="nomeUser">Nome :</label>
      <input type="name" class="form-control" id="nomeUser" placeholder="Digite o seu Nome completo" name="nomeUser">
    </div>
    <div class="form-group">
      <label for="emailUser">E-mail :</label>
      <input type="Email" class="form-control" id="emailUser" placeholder="Digite Seu E-mail Corporativo" name="emailUser">
    </div>
     <div class="form-group">
      <label for="senhaUser">Senha:</label>
      <input type="password" class="form-control" id="senhaUser" placeholder="Digite Sua Senha" name="senhaUser">
    </div>
     <div class="form-group">
      <label for="senhaUser_comf">Comfime Sua senha:</label>
      <input type="password" class="form-control" id="senhaUser_comf" placeholder="Digite a senha Igual a anterior" name="senhaUser_comf">
    </div>
     

    <button type="submit" class="btn btn-default">Cadastar</button>
  </form>
</div>

</body>
</html>