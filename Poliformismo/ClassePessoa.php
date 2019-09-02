<?php

class Pessoa{

private $nome;
public $email;
private $cpf;
private $sexo;
private $nasc;
private $senha;
protected $posicao;



        function __construct($vetor){
            $this->nome = $vetor['nome'];
            $this->cpf = $vetor['cpf'];
            $this->sexo = $vetor['sexo'];
            $this->nasc = $vetor['nasc'];
            $this->nasc = $vetor['senha'];
            $this->posicao=0;

        }
         public function correr(){
             $this->posicao++;
         }
         
        public function get_posicao(){
            return ($this->posicao);
        }
      
        public function get_nome()
        {
            return($this->nome);
        }
        public function set_email($e)
        {
            return $this->email = $e;
        }
         public function get_email()
        {
            return($this->email);
        }
        public function get_cpf()
        {
            return($this->cpf);
        }
        public function get_sexo()
        {
            return($this->sexo);
        }
        public function get_nasc()
        {
            return($this->nasc);
        }
        public function set_senha(){
            return($this->senha = $s);
        }
        
}
?>