<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="tamJuba" placeholder="Digite o Tamanho da Juba..."/></br>
        <select name="rugido">
            <option>Agudo</option>
            <option>Rouco</option>
            <option>Grave</option>
        </select></br>

        <input type="submit" value="Novo Leão"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeLeao.php");
        $l = new Leao($_POST);
        session_start();
        $_SESSION["leao"][] = $l;
        $l->exibir();  echo"<br/>";
        echo "Leão cadastrado com sucesso<br/>";
        echo "<a href='index.php'>Voltar para 'Animais'</a>";
    
    }
    ?>  
</body>
</html>