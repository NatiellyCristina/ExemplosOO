<?php
	require("classeInput.php");
	require("classeFormulario.php");
	$f = new Formulario(array("action"=>"cadastra_dados.php","method"=>"post"));
	
	$f->add_input(array("type"=>"text","name"=>"nome", "placeholder"="nome ..."));
	$f->add_input(array("type"=>"email","name"=>"email", "placeholder"="email ..."));
	$f->add_TextArea(array("type"=>"msg","name"=>"msg", "placeholder"="mensagem..."));
	$f->add_input(array("type"=>"text","name"=>"sexo", "placeholder"="sexo..."));
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>.entrada{margin: 5px;}</style>
	</head>
	<h3>Formulario de contato</h3>
	<body>
		<?php
			$f->exibe();
		?>
	</body>
</html>