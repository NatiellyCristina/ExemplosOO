<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="chifre" placeholder="Digite o Tamanho do Chifre..."/></br>

        <input type="submit" value="Novo Rinoceronte"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeRinoceronte.php");
        $R = new Rinoceronte($_POST);
        session_start();
        $_SESSION["Rinoceronte"][] = $R;

        echo "Rinoceronte cadastrado com sucesso<br/>";
        $R->exibir();  echo"<br/>";

        echo "<a href='index.php'>Voltar para 'Animais'</a>";
    
    }
    ?>  
</body>
</html>