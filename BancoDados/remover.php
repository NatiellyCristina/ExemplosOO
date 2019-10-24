<?php
	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	$ctrl = New ControllerBD($conexao);
	$ctrl->remover($_POST["ID"],$_POST["tabela"]);

?>
<hr />
<a href='listar.php'>Voltar Para a listagem</a>
</body>
</html>