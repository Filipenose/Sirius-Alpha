<?php


class Connect {

    private static $host = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $database = "basedetestes";
    private static $charset = "utf8";
    private static $connect;

    //Esta função retorna uma conexão ativa, ou cria uma conexão nova e retorna a mesma.
    public static function getConnection() {
        if (Connect::$connect == null) {
            try {
                //connect as appropriate as above
                Connect::$connect = new PDO("mysql:host=" . Connect::$host . ";dbname=" . Connect::$database . ";charset=" . Connect::$charset, Connect::$user, Connect::$password);
                return Connect::$connect;
            } catch (PDOException $ex) {
                echo "UM ERRO OCORREU NA CONEXÃO COM O BANCO DE DADOS!" . $ex->getMessage();
            }
        } else {
            return Connect::$connect;
        }
    }

}



/*class Connect{

	public static $instance;

	private function __construct(){
		
	}


public static function getInstance(){
		if (!isset(self::$instance)){
self::$instance = new PDO('mysql:host=localhost;dbname=basedetestes', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

		}

		return self::$instance;
}



}





  */