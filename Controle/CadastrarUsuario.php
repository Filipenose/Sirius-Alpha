<?php

include_once '../Usuario.php';
include_once '../DaoUsuario.php';
include_once '../Connect.php';

$nome_user = $_POST['nomeUser'];
$email_user = $_POST['emailUser'];
$senha_User = $_POST['senhaUser'];
$senha_User_Comf = $_POST['senhaUser_comf'];
$cod_usuario = null;
$ativo = null;




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


$user = new Usuario();
$user->setCod_usuario($cod_usuario);
$user->setEmail($email_user);
$user->setNome($nome_user);
$user->setSenha($senha_User);
$user->setAtivo($ativo);

 $con = Connect::getConnection();
 $sql =  $con->query("Select email_usuario From tarefas");
 if($sql){ 
 $emailBD = $sql->fetch_assoc();// If $sql is True
   while  ($email_user = $emailBD['email_usuario'] && $senha_User != $senha_User_Comf) {
    	/*if ($emailBD['email_usuario'] = $email_user) {
			//echo "<script language='JavaScript'>alert(' E-mail já cadastrado, tente novamente !! '); window.location = '../CadastroDeUsuario.php';</script>" ;  
			echo "<script language='JavaScript'>alert(' $emailBD !! '); window.location = '../CadastroDeUsuario.php';</script>" ;  		
    	}*/
     
echo "<script language='JavaScript'>alert(' E-mail já cadastrado e senha não confere, tente novamente !! '); window.location = '../CadastroDeUsuario.php';</script>" ;
   	
   }

}

else{
	echo "<script language='JavaScript'>alert(' Cadastro Realizado Com Sucesso! !! '); window.location = '../index.php';</script>" ;
}
/*elseif ($senha_User != $senha_User_Comf) {
	echo "<script language='JavaScript'>alert(' As senhas não são iguais, tente novamente !! '); window.location = '../CadastroDeUsuario.php';</script>" ;	# code...
}else{
	echo "<script language='JavaScript'>alert(' Cadastro Realizado Com Sucesso! !! '); window.location = '../index.php';</script>" ;
}*/
//session_start();
DaoUsuario::createUsuario($user);

/*
if ($senha_User != $senha_User_Comf) {
echo "<script language='JavaScript'>alert(' As senhas não são iguais, tente novamente !! '); window.location = '../CadastroDeUsuario.php';</script>" ;   # code...
}else{
   echo "<script language='JavaScript'>alert(' Cadastro Realizado Com Sucesso! !! '); window.location = '../Home.php';</script>" ;
}

*/
//DaoTarefa::createTarefa($task);

} catch (Throwable $e) {
    echo $e->getMessage();
} 

 ?>