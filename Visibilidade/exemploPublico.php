<?php

include("classeExemploPublico.php");

$o = new ExemploPublico("Teste Publico");

$o->metodo_publico();

echo "<br />".$o->atributo_publico;

$o->atributo_publico = "Novo Valor";

echo "<br />".$o->atributo_publico;

?>