<?php
require_once include("classeAnimal.php");
require_once include("interfaceExibicao.php");
require_once include("classeBagre.php");
require_once include("classeCascavel.php");
require_once include("classeElefante.php");
require_once include("classeLeao.php");
require_once include("classeRinoceronte.php");
require_once include("classeTuiuiu.php");
session_start();

?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    </head>

    <body>
    <h3>Leão</h3>
    <table border="1">
    <tr>
        <td>Peso</td>
        <td>Tamanho</td>
        <td>Cor</td>
        <td>Velocidade</td>
        <td>Tamnho Juba</td>
        <td>Rugido</td>

    </tr>
    <?php
        foreach($_SESSION["leao"]) as $i=>$l{
            $l->exibeTr();
        }
    ?>
    </table>

    <hr />
    <body>
    <h3>Leão</h3>
    <table border="1">
    <tr>
        <td>Peso</td>
        <td>Tamanho</td>
        <td>Cor</td>
        <td>Velocidade</td>
        <td>Tamnho Juba</td>
        <td>Rugido</td>

    </tr>
    <?php
        foreach($_SESSION["Rinoceronte"]) as $i=>$l{
            $l->exibeTr();
        }
    ?>
    </table>

      <body>
    <h3>Rinoceronte</h3>
    <table border="1">
    <tr>
        <td>Peso</td>
        <td>Tamanho</td>
        <td>Cor</td>
        <td>Velocidade</td>
        <td>Tamnho Juba</td>
        <td>Rugido</td>

    </tr>
    <?php
        foreach($_SESSION["Rinoceronte"]) as $i=>$l{
            $l->exibeTr();
        }
    ?>
    </table>
    <body>
    <h3>Elefante</h3>
    <table border="1">
    <tr>
        <td>Peso</td>
        <td>Tamanho</td>
        <td>Cor</td>
        <td>Velocidade</td>
        <td>Tamnho Juba</td>
        <td>Rugido</td>

    </tr>
    <?php
        foreach($_SESSION["elefante"]) as $i=>$l{
            $l->exibeTr();
        }
    ?>
    </table>