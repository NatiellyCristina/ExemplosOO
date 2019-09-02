<?php

	include("classePaiProtected.php");
	
	class FilhaDePaiProtected extends PaiProtected{
		
		private $atributo_filha;
		
		public function metodo_filha(){
			echo "<br />****Acessando metodo da pai
			      na filha****<br />";
			$this->metodo_do_pai();
		}
		
		public function modifica_atributo_pai($v){
			$this->atributo_do_pai = $v;
		}
		
	}


?>