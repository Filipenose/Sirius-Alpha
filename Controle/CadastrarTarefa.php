<?php

include_once '../Tarefas.php';
include_once '../DaoTarefa.php';
include_once '../Connect.php';

$data_criacao = $_POST['data_criacao'];
$descricao = $_POST['descricao'];
$id_tarefas = null;
//$id_tarefas = $_POST['idTarefa'];
$nome_tarefa = $_POST['NomeTarefa'];
$user_criador = $_POST['nome_criador'];




/*$sql = "INSERT INTO tarefas VALUES";
$sql .="('$data_criacao','$descricao','$id_tarefa','$nome_tarefa','$user_criador')";

if ($connect->query($sql) === TRUE) {
 	echo "Funcionou misera" ;
 } 
 else{
 	echo "Erro: ".$sql. "<br>" . $Connect->error;
 }
 $connect->close();*/
//$con = Connect::getConnection();
    //Puxando os dados e colocando numa sess�o, quando fechar a p�gina a sess�o morre...

try {


$task = new Tarefas();
$task->setData_criacao($data_criacao);
$task->setDescricao($descricao);
$task->setId_tarefa($id_tarefas);
$task->setNome_tarefa($nome_tarefa);
$task->setUser_criador($user_criador);

//session_start();
DaoTarefa::createTarefa($task);


if (isset($task)) {
echo "<script language='JavaScript'>alert(' Cadastro foi realizado com seucesso !! '); window.location = '../home.php';</script>" ;   # code...
}else{
   echo "<script language='JavaScript'>alert(' DEU MERDA PIVETE !! '); window.location = '../CadastroDeTarefa.php';</script>" ;
}


//DaoTarefa::createTarefa($task);

} catch (Throwable $e) {
    echo $e->getMessage();
} 

 ?>