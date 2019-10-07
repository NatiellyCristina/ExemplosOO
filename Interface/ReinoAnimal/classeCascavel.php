<?php


require_once include("classeAnimal.php");

require_once include("interfaceExibicao.php");

class Cascavel extends animal implements Exibicao{

    private $guizo;
    private $bote;

    public function __construct($vetor){
        parent:: __construct($vetor);
        $this->guizo = $vetor["guizo"];
        $this->bote = $vetor["bote"];
        $this->velocidade_maxima = 25;
        }

        public function exibir(){
            parent::exibir();
            echo "<label>Tamanho do Guizo</label>: ".$this->guizo."</br>";
            echo "<label>Velocidade do Bote</label>: ".$this->bote."</br>";
        }

}
?>