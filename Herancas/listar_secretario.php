<?php

    include("cabecalho.php");
    include("ClasseSecretario.php");
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
                    <th>Salario</th>
                
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["secretario"] as $i=>$s)
                {
                 
                    $s->exibeTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>