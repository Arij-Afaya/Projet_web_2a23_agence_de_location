<?php
	class reponse{
		private $id_r=null;
        private $date_c;
		private $reponse_r=null;
		
	
		
		function __construct( $date_r, $reponse_r){
		
			$this->date_r=$date_r;
			$this->reponse_r=$reponse_r;
			
			
		}
		
		function getdate_r(){
			return $this->date_r;
		}
		function getreponse_r(){
			return $this->reponse_r;
		}
		
		function setdate_r(string $date_r){
			$this->date_r=$date_r;
		}
		function setreponse_r(string $reponse_r){
			$this->reponse_r=$reponse_r;
		}
		
	}


?>