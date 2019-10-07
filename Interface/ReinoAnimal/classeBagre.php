<?php


include("classeAnimal.php");
include("interfaceExibicao.php");

class Bagre extends animal implements Exibicao{

    private $nadadeira;
    private $bigode;

    public function __construct($vetor){
        parent:: __construct($vetor);
        $this->nadadeira = $vetor["nadadeira"];
        $this->bigode = $vetor["bigode"];
        $this->velocidade_maxima = 70;
        }

        public function exibir(){
            parent::exibir();
            echo "<label>Tamanho da Nadadeira</label>: ".$this->nadadeira."</br>";
            echo "<label>Tamanho do Bigode</label>: ".$this->bigode."</br>";
        }

}
?>