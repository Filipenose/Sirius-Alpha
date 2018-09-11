<?php 

include_once 'Connect.php';
include_once'Tarefas.php';
include_once 'DaoTarefa.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
<h1>Teste</h1>
<form method="POST"> 
<label for="idTarefa">ID da tarefa:</label>
      <input type="id" class="form-control" id="idTarefa" placeholder="insira o ID " name="idTarefa">
</form>
<?php
$id_tarefas = $_POST['idTarefa'];
$con = Connect::getConnection();

$teste = new Tarefas();
$teste->setId_tarefa($id_tarefas);
DaoTarefa::createTarefa($teste);
if (!null==$teste) {
echo "<script language='JavaScript'>alert(' deu certo '); window.location = '../home.php';</script>" ;
  
}else {

	echo "<script language='JavaScript'>alert(' deu merda '); window.location = '../home.php';</script>";
}
?>
</body>
</html>