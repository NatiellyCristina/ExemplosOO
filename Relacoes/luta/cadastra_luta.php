<?php


include("cabecalho.php");

require_once("ClasseLuta.php");
require_once("ClasseLutador.php");


session_start();

$l = new Luta($_POST);


$_SESSION['luta'][] = $l;

echo"<fieldset  style='width: 30%;'>";
echo"<legend>Luta cadastrada com sucesso</legend>";
 
 
?>