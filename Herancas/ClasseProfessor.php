<?php

    include("ClassePessoa.php");
class professor extends pessoa {

    public $salario;
    public $disciplina;

    function __construct($vetor)
    {
        parent::__construct($vetor);
        $this->salario = $vetor["salario"];
        $this->disciplina = $vetor["disciplina"];
    }
    
    function exibe()
    {
        $this->exibe_pessoa();
        echo"
            <fieldset>

            <div>	
				<label>Salário:</label> ".$this->salario."
			</div>						
			<div>	
				<label>Disciplina:</label> ".$this->disciplina."
			</div>						
              
            </fieldset>  ";
    }

    function exibeTR()
    {
        $this->exibePessoaTR();
        echo "
         
            <td>".$this->salario."</td>
            <td>".$this->disciplina."</td>
            
        </tr>";
    }

}

?>
