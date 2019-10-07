<?php

	include("../../classeLayout../classeCabecalhoHTML.php");
	$c = new CabecalhoHTML();
    $c->exibe();
	
    include("ClassController.php");
    include("conexao.php");

    $ctrl = new ControllerBD($conexao);
    $ctrl->remover($_POST['id'], $_POST['tabela']);


?>

<hr />
<a href='lista_<?$_POST['tabela'];?>.php'>Voltar Para a listagem</a>
</body>
</html>