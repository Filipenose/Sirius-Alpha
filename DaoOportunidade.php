<?php
include_once "CadastrarOportunidade.php";
include_once "Connect.php";
include_once "Oportunidade.php";
  
class DaoTarefa {

static function createOportundiade(Tarefas $opp) {
        $con = Connect::getConnection();
        try {
            $con = Connect::getConnection();
            $sql = "INSERT INTO tarefas(data_criacao,descricao,id_tarefas,nome_tarefa,user_criador) values (?,?,?,?,?)";
            $query = $con->prepare($sql);

            //PARAM_STR: Representa o tipo de dados SQL CHAR, VARCHAR ou outro tipo de dados de cadeia.
            $query->bindValue(1 ,$opp->getData_criacao()/*PDO::PARAM_DATE*/);
            $query->bindValue(2 ,   $opp->getDescricao(), PDO::PARAM_STR);
            $query->bindValue(3 ,  $opp->getId_tarefas(), PDO::PARAM_INT);
            $query->bindValue(4 , $opp->getNome_tarefa(), PDO::PARAM_STR);
            $query->bindValue(5 ,$opp->getUser_criador(), PDO::PARAM_STR);
            $query->execute();
            
            
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao inserir um novo investidor. <br>" . $ex->getMessage());
            throw $e;
        }
    }
  

   public static function readOportunidade($filtro, $orderby) {
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

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'tarefas');
            $dtos = $stmt->fetchAll();
            return $dtos;
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao obter dados das tarefas. <br>" . $ex->getMessage());
            throw $e;
        }
    }

}