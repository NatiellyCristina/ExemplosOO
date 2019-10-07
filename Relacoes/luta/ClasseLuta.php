<?php
    class Luta{
        
        
        protected $numero;
        protected $lutador1;
        protected $lutador2;
        protected $data;
        protected $resultado;
        protected $categoria;
        protected $vencedor;
    



        public function __construct($vetor)
        {
            $this->numero = $vetor['numero'];
            $this->data = $vetor['data'];
            $this->categoria = $vetor['categoria'];          
        }
        
        public function get_numero(){
            return $this->numero;
        }
        public function get_lutador1(){
     
                return $this->lutador1;
            
        }
        public function set_lutador1(Lutador $l){    
                $this->lutador1;
        
        }
        
        public function get_lutador2(){
     
            return $this->lutador2;
        
    }
    public function set_lutador2(Lutador $l){    
            $this->lutador2;
    
    }
    
        public function get_data(){
            return($this->data);

        }
        public function set_data($data){
            $this->data = $data;
        }
        public function get_resultado(){
            return $this->resultado;
        }
        
        public function set_resultado($res){
           $this->resultado = $res;
        }
           public function get_categoria(){
            return $this->categoria;
        }
        
        public function set_categoria($c){
           $this->categoria = $c;
        
        }

        public function get_vencedor(){
            return $this->categoria;
        }
        
        public function set_vencedor($v){
           $this->categoria = $v;
        
        }

    }
?>