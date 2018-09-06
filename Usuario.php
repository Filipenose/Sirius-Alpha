<?php 

class PojoUsuario{


	private $cod_usuario;
	private $nome;
	private $email_usuario;
	private $senha_usuario;
	private $ativo;
	private $perfil;

	function __construct() {
        
    }


	public function getCod_usuario() {
		return $this->cod_usuario ;
	}

	public function setCod_usuario($cod_usuario) {
		 $this->cod_usuario = $cod_usuario;
	}

	public function getNome()        {
		return $this->nome;
	}

	public function setNome($nome)        {
		$this->nome = $nome;
	}

	public function getEmail()       {
		return $this->email_usuario;
	}
	public function setEmail($email_usuario)       {
		$this->email = strtolower($email_usuario);
	}

	public function getSenha()       {
		return $this->senha_usuario;
	}

	public function setSenha($senha_usuario)       {
		 $this->nome = $senha_usuario;
	}

	public function getAtivo()       {
		return $this->ativo;
	}

	public function setAtivo($ativo)       {
		 $this->ativo = strtolower($ativo);
	}

	public function getPerfil()      {
		return $this->perfil;
	}
	
	public function setPerfil($perfil)      {
		 $this->perfil = $perfil;
	} 

}

