<?php

include_once "Connect.php";
include_once "Tarefas.php";
  
class DaoTarefa {

static function createTarefa(Tarefas $task) {
        $con = Connect::getConnection();
        try {
            $sql = "INSERT INTO tarefas(id_tarefa,nome_tarefa,descricao,data_criacao,user_criador) values (?,?,?,?,?,NOW())";
            $query = $con->prepare($sql);

            //PARAM_STR: Representa o tipo de dados SQL CHAR, VARCHAR ou outro tipo de dados de cadeia.

            $query->bindValue(1, $task->getId_tarefa());
            $query->bindValue(2, $task->getNome_tarefa(), PDO::PARAM_STR);
            $query->bindValue(3, $task->getDescricao(),PDO::PARAM_STR);
            $query->bindValue(4, $task->getData_criacao());
            $query->bindValue(5, $task->getUser_criador(), PDO::PARAM_STR);
            $query->execute();
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao inserir um novo investidor. <br>" . $ex->getMessage());
            throw $e;
        }
    }
  

   public static function readTarefa($filtro, $orderby) {
        try {
            $db = Connect::getConnection();
            $str = ("SELECT * FROM tarefas");
            if ($filtro != "") {
                $str = $str . " WHERE " . $filtro;
            }
            if ($orderby != "") {
                $str = $str . " ORDER BY " . $orderby;
            }
             $stmt = $db->query($str);

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Acao');
            $dtos = $stmt->fetchAll();
            return $dtos;
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao obter dados da ação. <br>" . $ex->getMessage());
            throw $e;
        }
    }

}


