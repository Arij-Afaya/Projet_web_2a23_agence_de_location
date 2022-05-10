<?php
	class disponibilite{
		//private $idd=null;

		private $mois=null;
        private $dated=null;
        private $datef=null;
		//private $disponibilite=null;
		
		private $password=null;

        
		function __construct($mois,$dated,$datef/*,$disponibilite*/){
			//$this->idd=$idd;
			$this->mois=$mois;
			$this->dated=$dated;
			$this->datef=$datef;
			//$this->disponibilite=$disponibilite;
			
		}
		function getidd(){
			return $this->idd;
		}
		function getmois(){
			return $this->mois;
		}
		function getdated(){
			return $this->dated;
		}
		function getdatef(){
			return $this->datef;
		}


		/*function getdisponibilite(){
			return $this->disponibilite;
		}*/

		function setmois(string $mois){
			$this->mois=$mois;
		}
		function setdated(string $dated){
			$this->dated=$dated;
		}
		function setdatef(string $datef){
			$this->datef=$datef;
		}

		/*function setdisponibilite(string $disponibilite){
			$this->disponibilite=$disponibilite;
		}*/
		
		
	}


?>