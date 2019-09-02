<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de professor!</title>
    </head>
    <body>
        <?php
               include("cabecalho.php");
            

    if(empty($_POST)){
    echo"<form action=\"cadastra_aluno.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de Aluno </legend>
        <p>";
            include("form_pessoa.php");
     echo
     "<label>Matricula:</label>
            <input type=\"text\" name=\"matricula\" size=\"30\" />
        </p>
        <p>
            <label>Notas</label>
            <input type=\"text\" step=\"0.01\" name=\"nota\" />
        </p>
        
            
        <input type=\"submit\" value=\"Cadastrar\"/>
    </fieldst>
         </form>
";
    }