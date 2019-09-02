<?php

include("classeExemploPrivado.php");

$o = new ExemploPrivado("**Valor do Atributo Privado**");

//$o->metodo_privado(); // Erro

//$o->atributo_privado = "Novo Valor"; // Erro

$o->metodo_publico();


?>