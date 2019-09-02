<?php

    include("cabecalho.php");
    include("ClasseAluno.php");
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
                    <th>Matricula</th>
                    <th>Nota</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["aluno"] as $i=>$a)
                {
                
                    $a->exibeTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>