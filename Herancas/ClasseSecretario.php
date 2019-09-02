<?php

include("ClassePessoa.php");
class secretario extends pessoa{

public $salario;

    function __construct($vetor)
    {
        parent::__construct($vetor);
        $this->salario = $vetor["salario"];
    }

    function exibe()
    {
        $this->exibe_pessoa();
        echo"
            <fieldset>

            <div>	
				<label>Salário:</label> ".$this->salario."
			</div>												
              
            </fieldset>  ";
    }

    function exibeTR()
    {
        $this->exibePessoaTR();
        echo "
         
            <td>".$this->salario."</td>
            </tr>";
    }

}

?>

