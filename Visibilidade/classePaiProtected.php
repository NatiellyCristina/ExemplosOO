<?php

class PaiProtected{
	
	protected $atributo_do_pai;
	
	protected function metodo_do_pai(){
		echo "Método protegido do pai. Acessível
			tanto para objetos do tipo 'PaiProtected'
			quanto 'FilhaDePaiProtected'<br />
			E aqui, um atributo protegido sendo acessado
			tanto por objetos de 'PaiProtected' quanto
			'FilhaDePaiProtected': ";
		echo $this->atributo_do_pai;
	}
	
	public function __construct($a){
		$this->atributo_do_pai = $a;
	}
	
}

?>