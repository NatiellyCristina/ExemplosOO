<?php

include("ClassePessoa.php");
class aluno extends pessoa{

        public $matricula;
        public $nota;

        function __construct($vetor)
        {
            parent::__construct($vetor);
            $this->matricula = $vetor["matricula"];
            $this->nota = $vetor["nota"];
        
        }

        function exibe()
    {
            $this->exibe_pessoa();
            echo"
                <fieldset>

                <div>	
                    <label>Matricula:</label> ".$this->matricula."
                </div>						
                <div>	
                    <label>Nota:</label> ".$this->nota."
                </div>						
                
                </fieldset>  ";
    }

      
        function exibeTR()
            {
             
                $this->exibePessoaTR();
                echo "
                  
                    <td>".$this->matricula."</td>
                    <td>".$this->nota."</td>
                    </tr>";
            }


        
}

?>

