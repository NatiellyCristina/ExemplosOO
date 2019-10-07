<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="asa" placeholder="Digite o Tamanho da asa..."/></br>
        <input type="number" name="bico" placeholder="Digite o Tamanho do Bico..."/></br>
        
    

        <input type="submit" value="Novo Tuiuiu"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeTuiuiu.php");
        $T = new Tuiuiu($_POST);
        session_start();
        $_SESSION["tuiuiu"][] = $T;

        echo "Rinoceronte cadastrado com sucesso<br/>";
        $T->exibir();  echo"<br/>";

        echo "<a href='index.php'>Voltar para 'Animais'</a>";
    
    }
    ?>  
</body>
</html>