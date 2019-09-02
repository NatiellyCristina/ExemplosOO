<?php
class ExemploPrivado{
	private $atributo_privado;
	
	private function metodo_privado(){
		echo "<br />";
		echo "--Acessando um método privado";
		echo "<br />";
	}
	
	public function metodo_publico(){
		echo "Eu posso acessar um método privado: ";
		$this->metodo_privado();
		echo "<br />";
		echo "E também consigo acessar um atributo privado: ";
		echo $this->atributo_privado;
	}
	
	public function __construct($ap){
		$this->atributo_privado = $ap;
	}
}

?>