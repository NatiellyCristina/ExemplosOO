<?php

    include("cabecalho.php");
    include("ClasseProfessor.php");
    session_start();

?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>Disciplina</th>
                    <th>Salario</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["professor"] as $i=>$p)
                {
                
                    $p->exibeTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>