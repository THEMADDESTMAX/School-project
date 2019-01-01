<?php 
	class Members{
		public $mysqli = "";
		function  __construct(){
			$this -> mysqli = new mysqli("localhost", "u422352348_admin", "marta20", "u422352348_ordy");
			if ( $this -> mysqli -> connect_errno) {
				return false;
			}
		}
		public function reg($login, $password, $gender, $name, $surname){
			if (!$this->mysqli->query("INSERT INTO `accounts` (`LOGIN`, `PASSWORD`, `NAME`, `SURNAME`, `GENDER`) VALUES ('".$login."', '".$password."', '".$name."', '".$surname."', '".$gender."');")) {
				echo "Не удалось (" . $this->mysqli->errno . ") " . $this->mysqli->error;
			}else{
				echo "Все отлично сделалось";
			}
			
		}
	}
?>