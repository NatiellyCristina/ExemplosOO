<?php

include("cabecalho.php");
include("ClasseSecretario.php");


$s = new secretario($_POST);

session_start();

$_SESSION['secretario'][] = $s;

echo"Secretario cadastrada com sucesso";
$s->exibe();
 
?>