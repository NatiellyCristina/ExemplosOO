<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="tromba" placeholder="Digite o Tamanho da Tromba..."/></br>
        <input type="number" name="marfim" placeholder="Digite o Tamanho do Marfim..."/></br>

        <input type="submit" value="Novo Elefante"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeElefante.php");
        $E = new Elefante($_POST);
        session_start();
        $_SESSION["Elefante"][] = $E;

        echo " Elefante cadastrado com sucesso<br/>";
        $E->exibir();  echo"<br/>";

        echo "<a href='index.php'>Voltar para 'Animais'</a>";
    
    }
    ?>  
</body>
</html>