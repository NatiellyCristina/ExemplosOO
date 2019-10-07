<?php

require_once include("classeAnimal.php");

require_once include("interfaceExibicao.php");

class Leao extends Animal implements Exibicao{

    private $tamJuba;
    private $rugido;


    public function __construct($vetor){
        parent::__construct($vetor);
        $this->velocidade_maxima = 50;
        $this->tamJuba = $vetor["tamJuba"];
        $this->rugido = $vetor["rugido"];
    }

    public function exibir(){
        parent::exibir();
        echo "<label>Tamanho da Juba</label>: ".$this->tamJuba."</br>";
        echo "<label>Rugido</label>: ".$this->rugido."</br>";
    }
    
}
?>