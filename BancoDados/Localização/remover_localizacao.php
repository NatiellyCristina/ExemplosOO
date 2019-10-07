<?php
	include("../../classeLayout../classeCabecalhoHTML.php");
	$c = new CabecalhoHTML();
	$c->exibe();
	
	include("conexao.php");

	$ID_LOCALIZACAO = $_POST["ID_LOCALIZACAO"];
	
	$delete = "DELETE FROM LOCALIZACAO WHERE ID_LOCALIZACAO =:ID_LOCALIZACAO";
	
	$stmt = $conexao->prepare($delete);

    // impede que usuarios mal intensionados deletem todos os dados do banco
	$stmt->bindValue(":ID_LOCALIZACAO",$ID_LOCALIZACAO);
	
	$stmt->execute();
	
	echo "Localização removida com sucesso!";
	echo"<br/>";
?>
<hr />
<a href='lista_localizacao.php'>Voltar Para a listagem</a>
</body>
</html>