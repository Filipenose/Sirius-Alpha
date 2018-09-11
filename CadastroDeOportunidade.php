
<?php
    include_once("menu_admin.php");   
?>  
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
  <title>Cadastro de Oportunidades</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2>Tarefas</h2>
  <form action="Controle/CadastrarTarefa.php" method="POST">
    <div class="form-group">
      <label for="idTarefa">Nome Da Oportunidade:</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
    </div>
    <div class="form-group">
      <label for="NomeTarefa">Id da Oportunidade:</label>
      <input type="name" class="form-control" id="NomeTarefa" placeholder="insira o nome da tarefa" name="NomeTarefa">
    </div>
     <div class="form-group">
      <label for="descricao">Descrição da Oportunidade:</label>
      <input type="Descrição" class="form-control" id="descricao" placeholder="Descrição Resumida" name="descricao">
    </div>
     <div class="form-group">
      <label for="data_criacao">Status da Oportunidade:</label>
      <input type="data" class="form-control" id="data_criacao" placeholder="Digite a data no formato ano/mês/dia" name="data_criacao">
    </div>
     <div class="form-group">
      <label for="user_criador">Fabricante:</label>
      <input type="name" class="form-control" id="nome_criador" placeholder="Digite seu nome" name="nome_criador">
    </div>
    <div class="form-group">
      <label for="idTarefa">Consultor:</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
    </div>
    <div class="form-group">
      <label for="idTarefa">Cliente:</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
    </div>
    <div class="form-group">
      <label for="idTarefa">Histórico</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
    </div>

    <button type="submit" class="btn btn-default">Cadastar</button>
  </form>
</div>

</body>
</html>