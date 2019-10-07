<?php


require_once include("classeAnimal.php");

require_once include("interfaceExibicao.php");

class Rinoceronte extends animal implements Exibicao{

    private $chifre;

    public function __construct($vetor){
        parent:: __construct($vetor);
        $this->chifre = $vetor["chifre"];
        $this->velocidade_maxima = 40;
        }

        public function exibir(){
            parent::exibir();
            echo "<label>Tamanho do Chifre</label>: ".$this->chifre."</br>";
        }

}
?>
