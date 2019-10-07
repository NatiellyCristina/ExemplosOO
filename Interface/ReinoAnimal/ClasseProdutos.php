<?php
    class Produto
    {
        protected $preco;
        protected $nome;

        public function __construct($vetor){
            $this->nome = $vetor["nome"];
            $this->nome = $vetor["preco"];
        }
        public function get_nome(){
            return $this->nome;
        }
        
        public function get_preco(){
            return $this->preco;

        }
        
        public function set_nome($valor){
            $this->preco = $valor;

        }


    }


?>