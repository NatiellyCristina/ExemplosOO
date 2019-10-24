<?php

	include("../../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("../../classeForm/InterfaceExibicao.php");
	require_once("../../classeForm/classeInput.php");
	require_once("../../classeForm/classeButton.php");
    require_once("../../classeForm/classeForm.php");
    require_once("../../classeForm/classeSelect.php");
    require_once("../../classeForm/classeOption.php");
	require_once("conexao.php");


	$v = array("action"=>"insere.php?tabela=funcionario","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_FUNCIONARIO","placeholder"=>"ID DO FUNCIONARIO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"SOBRENOME","placeholder"=>"SOBRENOME...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"EMAIL","placeholder"=>"EMAIL...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"TELEFONE","placeholder"=>"TELEFONE...");
    $f->add_input($v);
    $v = array("type"=>"number","name"=>"DATA_CONTRATACAO","placeholder"=>"DATA DA CONTRATAÇÃO...");
    $f->add_input($v);
    $v = array("type"=>"number","name"=>"SALARIO","placeholder"=>"SALARIO...");
    $f->add_input($v);
    
    
    $select = "SELECT ID_FUNCAO AS value, TITULO_FUNCAO AS texto FROM funcao ORDER BY TITULO_FUNCAO";

	$stmt = $conexao->prepare($select);
	$stmt->execute();

	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
    }	
       
    $v = array("name"=>"ID_FUNCAO");
    $f->add_select($v,$matriz);

    $matriz = null;

    $select = "SELECT ID_FUNCIONARIO AS value, NOME AS texto FROM FUNCIONARIO ORDER BY NOME";

	$stmt = $conexao->prepare($select);
	$stmt->execute();

	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
    }	

    $v = array("name"=>"ID_GERENTE");
    $f->add_select($v,$matriz);

    $matriz = null;

    $select = "SELECT ID_DEPARTAMENTO AS value, NOME_DEPARTAMENTO AS texto FROM departamento ORDER BY NOME_DEPARTAMENTO";

	$stmt = $conexao->prepare($select);
	$stmt->execute();

	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
    }	

    $v = array("name"=>"ID_DEPARTAMENTO");
    $f->add_select($v,$matriz);
    
   

	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>

<h3>Formulário - Inserir Funcionario</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>