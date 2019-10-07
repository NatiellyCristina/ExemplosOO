<?php

require_once("ClasseProdutos.php");
require_once("ClasseCarrinho.php");

Session_start();

echo"<h2>Seu carrinho </h2>";
if(!isset($_SESSION["carrinho"])){
    $_SESSION["carrinho"] = new Carrinho();

}

if(!empty($_POST)){
    $count = 0;
    $posicao = $_POST["id"];
  
    $p = $_SESSION["produto"][$posicao];
    $_SESSION["carrinho"]->add_lista_produto($p) ;

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <h2>Seu carrinho</h2>
<?php

    $_SESSION["carrinho"]->exibe_produtos();

?>
<hr/>
<h3>Produtos Disponíveis para Compra</h3>
<?php
foreach($_SESSION["produto"] as $i=>$p){
    $p->exibe_produto_compra($i);
}
?>
    
</body>
</html>