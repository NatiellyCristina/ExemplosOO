<?php

include("cabecalho.php");
include("ClasseProfessor.php");



$p = new professor($_POST);

session_start();

$_SESSION['professor'][] = $p;

echo"Professor cadastrada com sucesso";
$p->exibe();
 
?>
