<?php


include_once '../DaoTarefa.php';
include_once '../Tarefas.php';


$id_tarefa = $_POST['id'];
$nome_tarefa = $_POST['tarefa'];
$descricao = $_POST['descricao'];
$data_criacao = $_POST['data_criacao'];
$user_criador = $_POST['user_criador'];
//$con = Connect::getConnection();
    //Puxando os dados e colocando numa sessão, quando fechar a página a sessão morre...
$task = new Tarefas();
$task->setId_tarefa($id_tarefa);
$task->setNome_tarefa($nome_tarefa);
$task->setDescricao($descricao);
$task->setData_criacao($data_criacao);
$task->setUser_criador($user_criador);

DaoTarefa::createTarefa($task);
/*if (id_tarefa == $_POST['id']) {
echo "<script language='JavaScript'>alert(' usuario cadastrado com sucesso !! '); window.location = '../home.php';</script>" ;   # code...
}else{
   echo "<script language='JavaScript'>alert(' não foi possivel cadastrar o usuário !! '); window.location = '../CadastroDeTarefa.php';</script>" 
}*/

echo "<script language='JavaScript'>alert(' usuario cadastrado com sucesso !! '); window.location = '../home.php';</script>" ;


 ?>