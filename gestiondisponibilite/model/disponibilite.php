<?php
	class disponibilite{
		//private $idd=null;

		private $categoried=null;
        private $dated=null;
        private $datef=null;
		
		private $password=null;

        
		function __construct($categoried,$dated,$datef){
			//$this->idd=$idd;
            $this->categoried=$categoried;
			$this->dated=$dated;
			$this->datef=$datef;
			
		}
		function getidd(){
			return $this->idd;
		}
		function getcategoried(){
			return $this->categoried;
		}
		function getdated(){
			return $this->dated;
		}
		function getdatef(){
			return $this->datef;
		}
		
		function setcategoried(string $categoried){
			$this->categoried=$categoried;
		}
		function setdated(string $dated){
			$this->dated=$dated;
		}
		function setdatef(string $datef){
			$this->datef=$datef;
		}
		
		
	}


?>