<?php
	class vehicule{
		private $idv=null;
		private $marque=null;
		private $modele=null;
		private $annee=null;
		private $prix=null;

		private $image=null;
		//private $rating=null;

		private $disponibilite=null;
	
		
		private $password=null;
		function __construct($marque, $modele, $annee, $prix, $image,$disponibilite){
			//$this->idv=$idv;
			$this->marque=$marque;
			$this->modele=$modele;
			$this->annee=$annee;
			$this->prix=$prix;

			$this->image=$image;
			//$this->rating=$rating;

			$this->disponibilite=$disponibilite;
			
		}
		function getidv(){
			return $this->idv;
		}
		function getmarque(){
			return $this->marque;
		}
		function getmodele(){
			return $this->modele;
		}
		function getannee(){
			return $this->annee;
		}
		function getprix(){
			return $this->prix;
		}


		function getimage(){
			return $this->image;
		}

		function getdisponibilite(){
			return $this->disponibilite;
		}


		/*function getrating(){
			return $this->rating;
		}*/



		function setmarque(string $marque){
			$this->marque=$marque;
		}
		function setmodele(string $modele){
			$this->modele=$modele;
		}
		function setannee(string $annee){
			$this->annee=$annee;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}



		function setimage(string $image){
			$this->image=$image;
		}

		function setdisponibilite(string $disponibilite){
			$this->disponibilite=$disponibilite;
		}

		/*function setrating(string $rating){
			$this->rating=$rating;
		}*/



		
	}


?>