<?php

include_once "Connect.php";
include_once "Usuario.php";
  
class DaoUsuario {

static function createUsuario(Usuario $user) {
        $con = Connect::getConnection();
        try {
            $sql = "INSERT INTO `usuario`(`nome`, `email_usuario`, `ativo`, `senha_usuario`, `cod_usuario`) values (?,?,?,?,?)";
            $query = $con->prepare($sql);

            //PARAM_STR: Representa o tipo de dados SQL CHAR, VARCHAR ou outro tipo de dados de cadeia.
            $query->bindValue(1, $user->getNome(), PDO::PARAM_STR);
            $query->bindValue(2, $user->getEmail(), PDO::PARAM_STR);
            $query->bindValue(3, $user->getAtivo(), PDO::PARAM_STR);
            $query->bindValue(4, $user->getSenha());
            $query->bindValue(5, $user->getCod_usuario());
            $query->execute();
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao inserir um novo investidor. <br>" . $ex->getMessage());
            throw $e;
        }
    }
  

   public static function readInvestidor($filtro, $orderby) {
        try {
            $db = Connect::getConnection();
            $str = ("SELECT * FROM usuario");
            if ($filtro != "") {
                $str = $str . " WHERE " . $filtro;
            }
            if ($orderby != "") {
                $str = $str . " ORDER BY " . $orderby;
            }
            $stmt = $db->query($str);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'email_usuario');
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'senha_usuario');
            $dtos = $stmt->fetchAll();
            return $dtos;
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao obter dados do(s) investidor (s). <br>" . $ex->getMessage());
            throw $e;
        }
    }

}


?>