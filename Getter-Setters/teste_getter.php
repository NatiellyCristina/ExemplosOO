<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Teste Getter</title>
</head>
<body>
    <?php
    if(empty($_POST)){
    ?>
    <form method="POST">
        <input type="text" name="nome" placeholder="nome ..."/><br />
        <input type="email" name="email" placeholder="email ..."/><br />
        <input type="text" name="cpf" placeholder="cpf ..."/><br />
        Sexo:
        <input type="radio" name="sexo"  value="m"/> Masculino.
        <input type="radio" name="sexo"  value="f"/> Feminino.<br />

        Data Nascimento:
        <input type="date" name="nasc"/><br />

        <input type="password" name="senha" placeholder="senha .../>

        <button>Enviar</button>
</form>
    <?php }
       else{
           include("ClassePessoa.php");
           $p = new Pessoa($_POST);
           echo $p->get_nome();
             }
        
    ?>
</body>
</html> 