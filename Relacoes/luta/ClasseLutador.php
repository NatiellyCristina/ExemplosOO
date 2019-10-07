<?php

    class Lutador{

        protected $nome;
        protected $pais;
        protected $cidade;
        protected $apelido;
        protected $categoria;
       
    

        public function __construct($vetor)
        {
            $this->nome = $vetor["nome"];
            $this->pais = $vetor["pais"];
            $this->cidade = $vetor["cidade"];
            $this->apelido =$vetor["apelido"];
            $this->categoria = $vetor["categoria"];
        }

        public function get_nome()
        {
           $this->nome;
        }
        public function get_pais()
        {
            return ( $this->pais);
        }
        public function get_cidade()
        {
            return ($this->cidade);
        }
        public function set_cidade($c)
        {
            $this->cidade = $c;
        }
        public function get_apelido()
        {
            return ($this->apelido); 
        }
        public function get_categoria()
        {
            return ($this->categoria);
        }
        public function set_categoria($c)
        {
            $this->categoria = $c;
        }
        
        public function exibe_dados(){
            echo "<br /><label>Nome:</label>".$this->nome."<br/>";
            echo "<label>Pais:</label>".$this->pais."<br/>";
            echo "<label>Cidade:</label>".$this->cidade."<br/>";
            echo "<label>Apelido:</label>".$this->apelido."<br/>";
            echo "<label>Categoria:</label>".$this->categoria."<br/>";    

            echo"</fieldset>";
  
        }
        public function exibe_luta_choose($id){
            $this->exibe_dados();

            echo"<form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <input type='submit'  value='Adicionar lutador'/>
            </form>
        ";
        }


    }


?>