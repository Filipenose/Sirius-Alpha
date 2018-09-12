<?php 

	class Oportunidade {

		private $nome_Opp;
		private $id_Opp;
		private $descricao_Opp;
		private $status_Opp;
		private $fabricante;
		private $consultor_Opp;
		private $cliente_Opp;
		private $historico_Opp;
		private $vencimento;


		function __construct() {
	        
	    	}

		public function getNome_Opp() {
		return $this->nome_Opp;
									
							}	

		public function setNome_Opp($nome_Opp) {
		 $this->nome_Opp = $nome_Opp;
							
							}	

		public function getId_Opp() {
			return $this->id_Opp;
							
							}

		public function setId_Opp($id_Opp) {
			$this->id_Opp = $id_Opp;
							
							}

		public function getId_Opp_Fab() {
			return $this->id_Opp_Fab ;
		
							}

		public function setId_Opp_Fab($id_Opp_Fab) {
			$this->id_Opp_Fab = $id_Opp_Fab;
							
							}					

		public function getDescricao_Opp() {
			return $this->descricao_Opp ;
		
							}

		public function setDescricao_Opp($descricao_Opp) {
			$this->descricao_Opp = $descricao_Opp;
							}

		public function getStatus_Opp() {
			return $this->status_Opp ;
		
							}

		public function setStatus_Opp($status_Opp) {
			$this->status_Opp = $status_Opp;
							
							}

		public function getFabricante() {
			return $this->fabricante;
							}

		public function setFabricante($fabricante) {
			$this->fabricante = $fabricante;
							}

		public function getConsultor_Opp() {
			return $this->consultor_Opp ;
							}

		public function setConsultor_Opp($consultor_Opp) {
			$this->consultor_Opp = $consultor_Opp;
							}

		public function getCliente_Opp() {
			return $this->cliente_Opp ;
							}

		public function setCliente_Opp($cliente_Opp){
			$this->cliente_Opp = $cliente_Opp;
							}

		public function getHistorico_Opp() {
			return $this->historico_Opp ;

							}

		public function setHistorico_Opp($historico_Opp) {
			$this->historico_Opp = $historico_Opp;
						}																			
		public function getVencimento() {
		return $this->vencimento ;
									
							}	

		public function setVencimento($vencimento) {
		 $this->vencimento = $vencimento;
							
							}	






	}




 ?>