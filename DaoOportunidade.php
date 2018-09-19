<?php
include_once "CadastrarOportunidade.php";
include_once "Connect.php";
include_once "Oportunidade.php";
  
class DaoOportunidade {

static function createOportunidade(Oportunidade $opp) {
          $con = Connect::getConnection();
        try {
            //$con = Connect::getConnection();
            $sql = "INSERT INTO `oportunidade`(`nome_Opp`, `id_Opp`, `descricao_Opp`, `status_Opp`, `fabricante`, `consultor_Opp`, `cliente_Opp`, `historico_Opp`, `vencimento`, `id_Opp_Fab`) values(?,?,?,?,?,?,?,?,?,?)";
            $query = $con->prepare($sql);

            //PARAM_STR: Representa o tipo de dados SQL CHAR, VARCHAR ou outro tipo de dados de cadeia.

            $query->bindValue(7,                                        $opp->getCliente_Opp(),PDO::PARAM_STR);
            $query->bindValue(6,                                    $opp->getConsultor_Opp(),PDO::PARAM_STR);
            $query->bindValue(3,                                $opp->getDescricao_Opp(),PDO::PARAM_STR);
            $query->bindValue(5,                            $opp->getFabricante(),PDO::PARAM_STR);
            $query->bindValue(8,                        $opp->getHistorico_Opp(),PDO::PARAM_STR);
            $query->bindValue(2,                    $opp->getId_Opp(),PDO::PARAM_INT);
            $query->bindValue(1,                $opp->getNome_Opp(),PDO::PARAM_STR);
            $query->bindValue(4,            $opp->getStatus_Opp(),PDO::PARAM_STR);
            $query->bindValue(9,        $opp->getVencimento());
            $query->bindValue(10,   $opp->getId_Opp_Fab(),PDO::PARAM_STR);
            $query->execute();
            
            
        } catch (Throwable $ex) {
            $e = new Exception("Um erro ocorreu ao inserir uma nova Oportunidade. <br>" . $ex->getMessage());
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