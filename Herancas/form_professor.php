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
    echo"<form action=\"cadastra_professor.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de Professor </legend>
        <p>";
                     include("form_pessoa.php");
     echo
     "<label>Saário:</label>
            <input type=\"text\" name=\"salario\" size=\"30\" />
        </p>
        <p>
            <label>Disciplina</label>
            <input type=\"text\" step=\"0.01\" name=\"disciplina\" />
        </p>
        
            
        <input type=\"submit\" value=\"Cadastrar\"/>
    </fieldst>
         </form>
";
    }