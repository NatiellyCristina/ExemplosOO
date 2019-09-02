<?php
//este exemplo não irá funcionar em nenhum dos casos
// porque a classe filha tenta acessar atributos e
//métodos da classe pai que são privados.
//O correto é, nestas circunstâncias utilizar 
//"protected" para proteger atributos e métodos

include("classeFilhaHerdaDePaiPrivado.php");
$o = new FilhaHerdaPaiPrivado("Atributo Privado");

//erro
//$o->metodo_privado();

//erro
//$o->metodo_publico_filha_pai_privado(); 

//erro
//$o->metodo_publico();

?>