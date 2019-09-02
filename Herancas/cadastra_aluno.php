<?php

include("cabecalho.php");
include("ClasseAluno.php");


$a = new aluno($_POST);

session_start();

$_SESSION['aluno'][] = $a;

echo"Aluno  cadastrado com sucesso";
$a->exibe();
 
?>
