<?php
	class reclamation{
		private $id=null;
		private $type_c=null;
		private $message_c=null;
		private $date_c;
		
		
		function __construct( $type_c, $message_c, $date_c){
			
			$this->type_c=$type_c;
			$this->message_c=$message_c;
			$this->date_c=$date_c;
			
			
		}
		
		function gettype_c(){
			return $this->type_c;
		}
		function getmessage_c(){
			return $this->message_c;
		}
		function getdate_c(){
			return $this->date_c;
		}
		
		function settype_c(string $type_c){
			$this->type_c=$type_c;
		}
		function setmessage_c(string $message_c){
			$this->message_c=$message_c;
		}
		function setdate_c(string $date_c){
			$this->date_c=$date_c;
		}
		
	}


?>