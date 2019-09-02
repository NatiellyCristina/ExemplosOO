<?php

if(isset($_GET["op1"]) && isset($_GET["op2"])){

	include("classeCalculadora.php");
	
	$c = new Calculadora();
	$c->op1=$_GET["op1"];
	$c->op2=$_GET["op2"];
	$c->operacoes("/");
	$c->operacoes("+");
	
}
else{
	echo "informe os valores de op1 e op2";
}
	
?>