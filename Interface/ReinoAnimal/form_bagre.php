<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Animais</title>
</head>
<body>
    <form method="post">
        <?php include("form_animal.php");?>
        <input type="number" name="nadadeira" placeholder="Digite o Tamanho da Nadadeira..."/></br>
        <input type="number" name="bigode" placeholder="Digite o Tamanho do Bigode..."/></br>

        <input type="submit" value="Novo Bagre"/>
    </form>
    <?php
    if(!empty($_POST)){
        include("classeBagre.php");
        $B = new Bagre($_POST);
        session_start();
        $_SESSION["bagre"][] = $B;

        echo " Bagre cadastrado com sucesso<br/>";
        $B->exibir();  echo"<br/>";

        echo "<a href='index.php'>Voltar para 'Animais'</a>";
    
    }
    ?>  
</body>
</html>