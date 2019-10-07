<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="guizo" placeholder="Digite o Tamanho do guizo..."/></br>
        <input type="number" name="bote" placeholder="Digite a velocidade do bote..."/></br>

        <input type="submit" value="Nova Cacavel"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeCascavel.php");
        $c = new Cascavel($_POST);
        session_start();
        $_SESSION["cascavel"][] = $c;

        echo " Cascavel cadastrada com sucesso<br/>";
        $c->exibir();  echo"<br/>";

        echo "<a href='index.php'>Voltar para Animais</a>";
    
    }
    ?>  
</body>
</html>