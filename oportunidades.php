<?php
	/*include_once "Connect.php";
	include_once "Logar.php";*/
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Oportunidades</title>
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
        <h1>Lista de Oportunidades</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <table class="table">
            <thead>
              <p>Digite Para Buscar:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">

                <tr>
                
                <th>Nome </th>
                <th>Id </th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Fabricante</th>
                <th>Consultor</th>
                <th>Cliente</th>
                <th>Vencimento</th>
              </tr>
            </thead>

            <tbody>
             
             <?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
$connection = new mysqli("localhost", "root", "", "basedetestes");
$sql = $connection->query("Select * From oportunidade");

if($sql){ // If $sql is True
    while($exibe = $sql->fetch_assoc()){
        echo"<tr>"; 
       //echo "<tr><td>Identificador: <td>";
        echo "<td>".$exibe["nome_Opp"]."</td>";

      //  echo "<tr><td>Nome: <td>";
        echo "<td>".$exibe["id_Opp_Fab"]."</td>";

     //   echo "<tr><td>Descrição: <td>";
        echo "<td>".$exibe["descricao_Opp"]."</td>";

       // echo "<tr><td>Data Criação: <td>";
        echo "<td>".$exibe["status_Opp"]."</td>";

      //  echo "<tr><td>Usuário criador: <td>";
        echo "<td>".$exibe["fabricante"]."</td>";

        echo "<td>".$exibe["consultor_Opp"]."</td>";

        echo "<td>".$exibe["cliente_Opp"]."</td>";

        echo "<td>".$exibe["vencimento"]."</td>";
        echo "<td> <a href='Home.php'><button class='btn btn-primary btn-info btn-block'>Editar</button></a></td>";

        echo "<tr/>";
        }


    }

?>
              
              
            </tbody>

                
              </tr>
            </thead>
            
          </table>
        </div>
		</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
