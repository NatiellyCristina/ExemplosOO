<?php
Session_start();
require_once("ClasseProdutos.php");

$vetor = array("nome"=>"Mouse sem Fio", "preco"=>"15.00");
$p1 = new Produto($vetor);
$_SESSION["produto"][] = $p1;

$vetor = array("nome"=>"Teclado", "preco"=>"25.00");
$p2 = new Produto($vetor);
$_SESSION["produto"][] = $p2;

$vetor = array("nome"=>"Pendrive 16GB", "preco"=>"38.00");
$p3 = new Produto($vetor);
$_SESSION["produto"][] = $p3;
?>