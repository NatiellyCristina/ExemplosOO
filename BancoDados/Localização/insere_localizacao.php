<?php

include("conexao.php");

if(!empty($_POST)){

    $ID_LOCALIZACAO=$_POST["ID_LOCALIZACAO"];
    $ENDERECO=$_POST["ENDERECO"];
    $CEP=$_POST["CEP"];
    $CIDADE=$_POST["CIDADE"];
    $ESTADO=$_POST["ESTADO"];
    $ID_PAIS=$_POST["ID_PAIS"];

	$insert = "INSERT INTO regiao VALUES (:ID_LOCALIZACAO,:ENDERECO,:CEP; CIDADE; ESTADO; ID_PAIS)";

	
	$stmt = $conexao->prepare($insert);

	$stmt->bindValue(":ID_LOCALIZACAO", $ID_LOCALIZACAO);
    $stmt->bindValue(":ENDERECO", $ENDERECO);
    $stmt->bindValue(":CEP", $CEP);
    $stmt->bindValue(":CIDADE", $CIDADE);
    $stmt->bindValue(":ESTADO", $ESTADO);
    $stmt->bindValue(":ID_PAIS", $ID_PAIS);
	$stmt->execute();
	
	echo "Localizaçaõ inserido com sucesso";
	echo"<a href='lista_localizacao.php'>Ir  Para a listagem</a>";
}
else{
	header("location: form_localizacao.php");
}
?>