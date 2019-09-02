<?php
     include("cabecalho.php");
            

    if(empty($_POST)){
    echo"<form action=\"cadastra_secretario.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de Secretario </legend>
        <p>";
            include("form_pessoa.php");
     echo
     "<label>Salario:</label>
            <input type=\"text\" name=\"salario\" size=\"30\" />
        </p>
    
         
        <input type=\"submit\" value=\"Cadastrar\"/>
    </fieldst>
         </form>
";
    }