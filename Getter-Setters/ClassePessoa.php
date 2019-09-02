<?php

class Pessoa{

private $nome;
public $email;
private $cpf;
private $sexo;
private $nasc;
private $senha;

        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->cpf = $vetor['cpf'];
            $this->sexo = $vetor['sexo'];
            $this->nasc = $vetor['nasc'];

        }
        function get_nome()
        {
            return($this->nome);
        }

        public function set_senha(){
            return($this->senha = $s);
        }
        
      
}
?>