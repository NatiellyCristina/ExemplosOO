<!DOCTYPE html>
<html>
	<head>
        <title>Cadastro de Lutadores </title>
	</head>
	
	<body>
    <?php include("cabecalho.php")?>
    <fieldset  style="width: 30%;">
    <legend>Cadastro de Lutadores</legend>

        <?php
        if(empty($_POST)){
        ?> 
            <form action="cadastra_lutador.php" method="POST">
            
                <input type="text" name="nome" placeholder="nome ..."/><br />
                <input type="text" name="pais" placeholder="pais ..."/><br />
                <input type="text" name="cidade" placeholder="cidade ..."/><br />
                <input type="text" name="apelido" placeholder="apelido ..."/><br />
    
                <select name="categoria">
                    <option value="">::categoria::</option>
                    <option value="pm">Peso Mosca</option>
                    <option value="pg">Peso Galo</option>
                    <option value="pp">Peso Pena</option>
                    <option value="pesado">Peso Pesado</option>
                    
                </select>
                <br />
                <button>Cadastrar</button>
             </form>
        </fieldset>
    <?php }   ?>
</body>
</html>