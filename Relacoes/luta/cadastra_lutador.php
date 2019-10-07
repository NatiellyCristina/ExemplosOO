<?php


include("cabecalho.php");
include("ClasseLutador.php");


$l = new Lutador($_POST);

session_start();

$_SESSION['lutador'][] = $l;

echo"<fieldset  style='width: 30%;'>";
echo"<legend>Lutador cadastrado com sucesso</legend>";
$l->exibe_dados();
 
?>