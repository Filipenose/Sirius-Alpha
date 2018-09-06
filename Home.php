<?php
	/*include_once "Connect.php";
	include_once "Logar.php";*/
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
     <meta charset="utf-8">
    <!--<meta charset="utf-8">=-->
    <!--<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="filipe">
    <!--<link rel="icon" href="imagens/favicon.ico">-->

    <title>Tarefas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body role="document">
	<?php
		include_once("menu_admin.php");		
	?>	
  
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Lista de Tarefas</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <table class="table">
            <thead>
              <p>Digite Para Buscar:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">

                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data criação</th>
                <th>Usuário Criador</th>
                <!--<th>Botão</th>-->
              </tr>
            </thead>

            <tbody id="myTable">
             
             <?php

 //header('Content-Type: text/html; charset=utf-8');
header("Content-Type: text/html; charset=ISO-8859-1",true);
$connection = new mysqli("localhost", "root", "", "basedetestes");
$sql = $connection->query("Select * From tarefas");
/*mysql_query("SET tarefas 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');*/
if($sql){ // If $sql is True
    while($exibe = $sql->fetch_assoc()){
        echo"<tr>"; 
       //echo "<tr><td>Identificador: <td>";
        echo "<td>".$exibe["id_tarefas"]."</td>";

      //  echo "<tr><td>Nome: <td>";
        echo "<td>".$exibe["nome_tarefa"]."</td>";

     //   echo "<tr><td>Descrição: <td>";
        echo "<td>".$exibe["descricao"]."</td>";

       // echo "<tr><td>Data Criação: <td>";
        echo "<td>".$exibe["data_criacao"]."</td>";

      //  echo "<tr><td>Usuário criador: <td>";
        echo "<td>".$exibe["user_criador"]."</td>";

        echo "<td> <a href='Home.php'><button class='btn btn-sm btn-info btn-block'>Editar</button></a></td>";

        echo "<tr/>";
        }


    }

?>
              
              
            </tbody>

                
             
           
            
          </table>
        </div>
		</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
