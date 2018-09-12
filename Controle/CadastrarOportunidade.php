<?php

include_once '../Oportunidade.php';
include_once '../DaoOportunidade.php';
include_once '../Connect.php';

$nomeOpp = $_POST['nomeOpp'];
$idOpp = null;
$idOppFab = $_POST['idOppFab'];
$descricaoOpp = $_POST['descricaoOpp'];
$statusOpp = $_POST['statusOpp'];
$fabricante = $_POST['fabricante'];
$consultor = $_POST['consultor'];
$cliente = $_POST['cliente'];
$historico = $_POST['historico'];
$vencimento= $_POST['vencimento'];

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
    //Puxando os dados e colocando numa sessão, quando fechar a página a sessão morre...

try {


$opp = new Oportunidade();
$opp->setNome_Opp($nomeOpp);
$opp->setId_Opp($idOpp);
$opp->setId_Opp_Fab($idOppFab);
$opp->setDescricao_Opp($descricaoOpp);
$opp->setStatus_Opp($statusOpp);
$opp->setFabricante($fabricante);
$opp->setConsultor_Opp($consultor);
$opp->setCliente_Opp($cliente);
$opp->setHistorico_Opp($historico);
$opp->setVencimento($vencimento);

//session_start();
DaoOportunidade::createOportunidade($opp);


if (isset($opp)) {
echo "<script language='JavaScript'>alert(' Cadastro foi realizado com seucesso !! '); window.location = '../oportunidades.php';</script>" ;   # code...
}else{
   echo "<script language='JavaScript'>alert(' DEU MERDA PIVETE !! '); window.location = '../CadastroDeOportunidade.php';</script>" ;
}

//DaoTarefa::createTarefa($task);

} catch (Throwable $e) {
    echo $e->getMessage();
} 
/*if ($id_tarefas == $_POST['idTarefa']) {
echo "<script language='JavaScript'>alert(' $id_tarefas !! '); window.location = '../home.php';</script>" ;   # code...
}else{
   echo "<script language='JavaScript'>alert(' $nome_tarefa !! '); window.location = '../CadastroDeTarefa.php';</script>" ;
}

//echo "<script language='JavaScript'>alert(' usuario cadastrado com sucesso !! '); window.location = '../home.php';</script>" ;

*/
 ?>