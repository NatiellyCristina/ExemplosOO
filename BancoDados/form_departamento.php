<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeOption.php");
	require_once("../classeForm/classeSelect.php");
	require_once("../classeForm/classeForm.php");
	require_once("../classeForm/classeButton.php");

	include("conexao.php");
	if(isset($_POST["ID"])){

		require_once("classeControllerBD.php");

		$c = new ControllerBD($conexao);
		$colunas=array("id_departamento", "nome_departamento","id_localizacao" );
		$tabelas[0][0]="departamento";
		$tabelas[0][1]=null;
		$ordenacao=null;
		$condicao = $_POST["ID"];

		$stmt = $c->selecionar($colunas, $tabelas, $ordenacao, $condicao);
		$linha = $stmt->fetch(PDO::FETCH_ASSOC);
		
		
		$value_id_departamento = $linha["id_departamento"];
		$value_nome_departamento = $linha["nome_departamento"];
		$value_id_localizacao= $linha["id_localizacao"];
		
		$action = "altera.php?tabela=departamento";
	}else{

		$action = "insere.php?tabela=departamento";
		$value_id_departamento = null;
		$value_nome_departamento = null;
		$value_id_localizacao = null;
	}


	//seleção dos valores que irão criar o <select>
	$select = "SELECT id_localizacao AS value, endereco AS texto FROM localizacao ORDER BY endereco";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	//_______________________________________________________________________________________________________

	$v = array("action"=>$action,"method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"id_departamento","placeholder"=>"ID ...","value"=>$value_id_departamento);
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"nome_departamento","placeholder"=>"Nome Departamento...", "value"=>$value_nome_departamento);
	$f->add_input($v);
	
	$v = array("name"=>"id_localizacao", "selected"=>$value_id_localizacao);
	$f->add_select($v,$matriz);

	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir País</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>