<?php

    require_once("ClasseProdutos.php");
    require_once("ClasseCarrinho.php");
    require_once("ClassePedido.php");

    session_start();

    $_SESSION['pedido'] = new Pedido($_SESSION['carrinho']);                                                                                                           
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
<h2>Resumo do Pedido</h2>


<?php
    $_SESSION["pedido"]->exibe_resumo();

?>
<hr />
<form method="post" action="finaliza_compra.php">
    <input type="submit" value="confirmar compra?" />
</form>
</body>
</html>