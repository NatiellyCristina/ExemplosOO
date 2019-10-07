<?php
	require_once("../../classeForm/InterfaceExibicao.php");
    require_once("../../classeForm/classeInput.php");
    require_once("../../classeForm/classeSelect.php");
    require_once("../../classeForm/classeOption.php");
    require_once("../../classeForm/classeForm.php");

    include ("conexao.php");

    // Selecao dos valores que irao criar os <select>
    $select = "SELECT ID_PAIS AS value , NOME_PAIS AS texto FROM PAIS ORDER BY NOME_PAIS";
    $stmt = $conexao->prepare($select);
    $stmt->execute();

    
    while($linha=$stmt->fetch()){
        $matriz[]=$linha;
    }
// ________________________________________________________________________________________________________________________________

	// vetor auxiliar para criar o formulário
	$v = array("action"=>"insere_localizacao.php","method"=>"post");
	//crio um objeto do tipo formulário

	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_LOCALIZACAO","placeholder"=>"ID DA LOCALIZAÇÃO ...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"ENDERECO","placeholder"=>"NOME DA LOCALIZAÇÃO...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"CEP","placeholder"=>"DIGITE SEU CEP...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"CIDADE","placeholder"=>" DIGITE SUA CIDADE...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"ESTADO","placeholder"=>"DIGITE SEU ESTADO...");
    $f->add_input($v);
    
    // select
    $v =array("name"=>"ID_PAIS");
    $f->add_select($v, $matriz);



    $v = array("type"=>"SUBMIT","name"=>"ENVIAR");
	$f->add_input($v);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Localizacão</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>