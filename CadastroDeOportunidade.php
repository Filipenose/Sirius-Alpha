
<?php
    include_once("menu_admin.php");   
?>  
<br><br>
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
  <h2>Cadastro de oportunidades</h2>
  <form action="Controle/CadastrarOportunidade.php" method="POST">
    <div class="form-group">
      <label for="nomeOppp">Nome Da Oportunidade:</label>
      <input type="name" class="form-control" id="nomeOpp" placeholder="Digite o Nome da Oportunidade" name="nomeOpp">
    </div>
    <div class="form-group">
      <label for="idOppFab">Id da Oportunidade:</label>
      <input type="id" class="form-control" id="idOppFab" placeholder="insira o Id da Oportunidade" name="idOppFab">
    </div>
     <div class="form-group">
      <label for="descricaoOpp">Descri��o da Oportunidade:</label>
      <input type="Descricao" class="form-control" id="descricaoOpp" placeholder="Descri��o Resumida" name="descricaoOpp">
    </div>
     <div class="form-group">
      <label for="statusOpp">Status da Oportunidade:</label>
      <input type="status" class="form-control" id="statusOpp" placeholder="Status (Ativo ou N�o Ativo)" name="statusOpp">
    </div>
     <div class="form-group">
      <label for="fabricante">Fabricante:</label>
      <input type="fabricante" class="form-control" id="fabricante" placeholder="Digite qual o fabricante" name="fabricante">
    </div>
    <div class="form-group">
      <label for="consultor">Consultor:</label>
      <input type="consultor" class="form-control" id="consultor" placeholder="Digite o nome do Owner dessa conta" name="consultor">
    </div>
    <div class="form-group">
      <label for="cliente">Cliente:</label>
      <input type="cliente" class="form-control" id="cliente" placeholder="Digite a Raz�o Social do Cliente" name="cliente">
    </div>
    <div class="form-group">
      <label for="historico">Hist�rico</label>
      <input type="historico" class="form-control" id="historico" placeholder="Digite o Hist�rico Detalhado da Oportunidade" name="historico">
    </div>
    <div class="form-group">
      <label for="vencimento">Vencimento</label>
      <input type="vencimento" class="form-control" id="vencimento" placeholder="Digite o vencimento da Oportunidade ano-m�s-dia" name="vencimento">
    </div>

    <button type="submit" class="btn btn-default">Cadastar</button>
  </form>
</div>

</body>
</html>