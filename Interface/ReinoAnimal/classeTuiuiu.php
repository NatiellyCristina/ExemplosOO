<?php


require_once include("classeAnimal.php");

require_once include("interfaceExibicao.php");

class Tuiuiu extends animal implements Exibicao
{

    private $asa;
    private $bico;

    public function __construct($vetor)
        {
        parent:: __construct($vetor);
        $this->asa = $vetor["asa"];
        $this->bico = $vetor["bico"];
        $this->velocidade_maxima = 15;
        }

        public function exibir()
        {
            parent::exibir();
            echo "<label>Tamanho do Guizo</label>: ".$this->asa."</br>";
            echo "<label>Velocidade do Bote</label>: ".$this->bico."</br>";
        }

}
?>