<?php

include_once "../Connect.php";
include_once '../DaoUsuario.php';
include_once '../Usuario.php';


$usuario = $_POST['email'];
$senha = $_POST['senha'];
$con = Connect::getConnection();
    //Puxando os dados e colocando numa sessão, quando fechar a página a sessão morre...
try {
    $usuarios = DaoUsuario::readInvestidor("email_usuario='".$usuario."' AND senha_usuario='".$senha."'", "");
    if(isset($usuarios[0])){
       if ($user1 = $usuario[0]) {
            //escreve o usuario da sessao;
        session_start();
        //Salva uma variável $user para ser usado como referência no futuro para JS's...
        $_SESSION['email'] = $user1;
        //direciona pra pagina certa
        echo "<script language='JavaScript'>alert('bem-vindo(a) $usuario!'); window.location = '../home.php';</script>";
        }  
        
    }else{

        echo "<script language='JavaScript'>alert(' usuario ou senha invalidos ! '); window.location = '../index.php';</script>";

    }

   
    
} catch (Throwable $e) {
    echo $e->getMessage();
} 



/*
include_once "../Connect.php";
include_once '../DaoUsuario.php';
include_once '../Usuario.php';
include_once '../index.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$con = Connect::getConnection();


try {

    //$usuarios = DaoUsuario::readInvestidor("email='".$email."' AND senha='".$senha."'", "");
    //if($email = $_SESSION['email'] AND $senha = $_SESSION['senha']){
       //echo "<script language='JavaScript'>alert('bem-vindo(a) $email!'); window.location = '../Home.php';</script>"; 
    
    $usuarios = DaoUsuario::readInvestidor("email_usuario='".$email."' AND senha_usuario='".$senha."'", "");
    if(isset($email)){
        
        $user = $email[0];
          
        //escreve o usuario da sessao;
        session_start();
        //Salva uma variável $user para ser usado como referência no futuro para JS's...
        $_SESSION['email'] = $user;
        //$_SESSION['senha'] = $senha;
        //direciona pra pagina certa
        echo "<script language='JavaScript'>alert('bem-vindo(a) $email!'); window.location = '../Home.php';</script>";
    }else{
        echo "<script language='JavaScript'>alert(' usuario ou senha invalidos ! '); window.location = '../index.php';</script>";

    }

 }catch (Throwable $e) {
    echo $e->getMessage();
} */

 ?>