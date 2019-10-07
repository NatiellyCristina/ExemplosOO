<!DOCTYPE html>
<html>
	<head>
        <title>Cadastro de Lutas </title>
        
	</head>
	
	<body>
    
    <?php
    
    include("cabecalho.php"); 
    ?>
        <fieldset  style="width: 30%;">
    <legend>Cadastro de Lutadores de luta</legend>

        <?php
            include("cabecalho.php");
            if(!empty($_GET)){
                $numero = $_GET["numero"];
            }else{
                $numero = "";

            }
        ?>
        <?php
        if(empty($_POST)){
        ?> 
                <input type="number" name="numero" placeholder="Luta..." 
                value="<?php echo $numero;?>" /><br />


                <?php
                 include('ClasseLuta.php');
    
                // mostra todas as lutas existentes
                 session_start();
                 foreach($_SESSION['luta'] as $i=>$l)
                 {
                     echo"
                    <select name='luta'>
                    <option value='$i'>$l->get_numero</option>    
                    </select>
                    ";


                 }
              ?>    
                </select>
                <button>Cadastrar</button>
             </form>
        </fieldset>
    <?php }   ?>
</body>
</html>