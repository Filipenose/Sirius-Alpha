<?php
session_start();
session_destroy();

//Remove todas as informa��es contidas na variaveis globais
unset($_SESSION['email'],			
$_SESSION['email'], 		
$_SESSION['senha']);

//redirecionar o usu�rio para a p�gina de login
header("Location: index.php");
?>