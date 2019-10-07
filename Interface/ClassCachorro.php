<?php
    include ('Interface_locomocao.php');

        class Cachorro implements locomocao{
            private $posicao;

            public function __construct(){
                $this->posicao = 0;
            }
            public function locomover($a){
                $this->posicao += $a;

            } 

        }
    ?>
