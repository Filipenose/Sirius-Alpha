

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
  <title>Cadastro de tarefas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
   
   include_once("menu_admin.php");   

?>  


<div class="container">
  <h2>Tarefas</h2>
  <form action="Controle/CadastrarTarefa.php" method="POST">
    <div class="form-group">
      <label for="idTarefa">ID da tarefa:</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
    </div>
    <div class="form-group">
      <label for="NomeTarefa">Tarefa:</label>
      <input type="name" class="form-control" id="NomeTarefa" placeholder="insira o nome da tarefa" name="NomeTarefa">
    </div>
     <div class="form-group">
      <label for="descricao">Descrição:</label>
      <input type="Descrição" class="form-control" id="descricao" placeholder="Descrição Resumida" name="descricao">
    </div>
     <div class="form-group">
      <label for="data_criacao">Data de criação:</label>
      <input type="data" class="form-control" id="data_criacao" placeholder="Digite a data no formato ano/mês/dia" name="data_criacao">
    </div>
     <div class="form-group">
      <label for="user_criador">Usuario Criador:</label>
      <input type="name" class="form-control" id="nome_criador" placeholder="Digite seu nome" name="nome_criador">
    </div>
    
    <button type="submit" class="btn btn-default">Cadastar</button>
  </form>
</div>

</body>

<?php
   // header("Content-Type: text/html; charset=ISO-8859-1",true);
  //include_once("menu_admin.php");   
  ?>  

</html>