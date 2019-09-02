<?php

	include("classeFilhaDePaiProtected.php");
	
	$o = new FilhaDePaiProtected("Valor do atributo Pai");
	
	//erro
	//$o->atributo_do_pai = "X";

	//erro
	//$o->metodo_do_pai();
	
	$o->metodo_filha();

?>