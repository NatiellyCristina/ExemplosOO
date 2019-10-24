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
		$colunas=array("funcionario.id_funcionario", "data_inicial","data_final", "id_funcao", "id_departamento" );
		$tabelas[0][0] = "historico_funcoes";
		$tabelas[0][1]=null;
		$ordenacao=null;

		$ordenacao=null;
		$condicao = $_POST["ID"];

		$stmt = $c->selecionar($colunas, $tabelas, $ordenacao, $condicao);
		$linha = $stmt->fetch(PDO::FETCH_ASSOC);
		
		
		$value_id_funcionario = $linha["id_funcionario"];
		$value_data_inicial = $linha["data_inicial"];
        $value_data_final = $linha["data_final"];
        $value_id_funcao = $linha["id_funcao"];
        $value_id_departamento = $linha["id_departamento"];
        
		
		$action = "altera.php?tabela=historico_funcoes";
	}else{

		$action = "insere.php?tabela=historico_funcoes";
		
		$value_id_funcionario = null;
		$value_data_inicial = null;
        $value_data_final =null;
        $value_id_funcao = null;
        $value_id_departamento = null;
	}


	//seleção dos valores que irão criar o <select> do funcionario
	$select = "SELECT id_funcionario AS value, nome AS texto FROM funcionario ORDER BY nome";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_funcionario[] = $linha;
	}	
	//seleção dos valores que irão criar o <select> da funcao
	
	//seleção dos valores que irão criar o <select> do departamento
	$select = "SELECT id_funcao  AS value, titulo_funcao AS texto FROM  funcao ORDER BY titulo_funcao";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_funcao[] = $linha;
	}	


	//seleção dos valores que irão criar o <select> do departamento
	$select = "SELECT id_departamento  AS value, nome_departamento AS texto FROM departamento ORDER BY nome_departamento";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz_departamento[] = $linha;
	}	

	//______________________________________________________________________________________________

	$v = array("action"=>$action,"method"=>"post");
	$f = new Form($v);
    
    
    //Funcionario
	$v = array("name"=>"id_funcionario", "selected"=>$value_id_funcionario);
    $f->add_select($v,$matriz_funcionario);
    
    //Inputs
	$v = array("type"=>"text","name"=>"data_inicial","placeholder"=>"data_inicial...","value"=>$value_data_inicial);
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"data_final","placeholder"=>"data_final...", "value"=>$value_data_final);
	$f->add_input($v);
    

    //Função
	$v = array("name"=>"id_funcao", "selected"=>$value_id_funcao);
    $f->add_select($v,$matriz_funcao);
    
    //Departamento
	$v = array("name"=>"id_departamento", "selected"=>$value_id_departamento);
    $f->add_select($v,$matriz_departamento);
    
    //Enviar
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
<h3>Formulário - Inserir historico_funcoes</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>