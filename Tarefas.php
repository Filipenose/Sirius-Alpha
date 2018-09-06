<?php 

	class Tarefas {

		private $id_tarefa;
		private $nome_tarefa;
		private $descricao;
		private $data_criacao;
		private $user_criador;					


		function __construct() {
        
	    }

	    public function getId_tarefas()    {
	    	return $this->id_tarefa;
	    }
	    
	    public function setId_tarefa($id_tarefas)    {
	    	$this->id_tarefa = $id_tarefas;
	    }					

	    public function getNome_tarefa()  {
	    	return $this->nome_tarefa;
	    }				

	    public function setNome_tarefa($id_tarefa)  {
	    	$this->nome_tarefa = $id_tarefa;
	    }

	    public function getDescricao()	  {
	    	return $this->descricao;
	    }

	    public function setDescricao($descricao)    {
	    	 $this->descricao = $descricao;
	    }

	    public function getData_criacao() {
	    	return $this->data_criacao;
	    }

	    public function setData_criacao($data_criacao) {
	    	$this->data_criacao = $data_criacao;
	    
	    }

	    public function getUser_criador() {
	    	return $this->user_criador;
	    }
	    public function setUser_criador($user_criador) {
	    	$this->user_criador = $user_criador;
	    }




	}




 ?>