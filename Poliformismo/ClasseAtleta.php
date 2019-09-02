<?php

class Atleta extends Pessoa{
      
    private $nivel; 

    public function correr(){
        $this->posicao = $this->posicao + $this->nivel;
    }

    public function set_nivel($n){
       $this->nivel = $n;
    }

}

?>