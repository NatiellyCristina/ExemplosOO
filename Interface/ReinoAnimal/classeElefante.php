<?php


require_once include("classeAnimal.php");

require_once include("interfaceExibicao.php");

class Elefante extends animal implements Exibicao{

    private $tromba;
    private $marfim;

    public function __construct($vetor){
        parent:: __construct($vetor);
        $this->tromba = $vetor["tromba"];
        $this->marfim = $vetor["marfim"];
        $this->velocidade_maxima = 35;
        }

        public function exibir(){
            parent::exibir();
            echo "<label>Tamanho da Tromba</label>: ".$this->tromba."</br>";
            echo "<label>Tamanho Marfim</label>: ".$this->marfim."</br>";
        }

}
?>