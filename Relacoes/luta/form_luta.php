<!DOCTYPE html>
<html>
	<head>
        <title>Cadastro de Lutas </title>
	</head>
	
	<body>
    
    <?php
    
    include("cabecalho.php"); 
    session_start();
    ?>
        <fieldset  style="width: 30%;">
    <legend>Cadastro de Lutas</legend>

        <?php
        if(empty($_POST)){
        ?> 
            <form action="cadastra_luta.php" method="POST">

                <?php
                if(!isset($_SESSION["luta"])){
                    $codigo = "1";
                }
                else{
                    $codigo = sizeof($_SESSION["luta"]) + 1;
                }
                echo "Luta numero $codigo <br />";
                ?>

                <input type="hidden" name="numero" value="<?php echo $codigo;?>" /><br />

                <input type="date" name="data" placeholder="data ..."/><br />
                
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