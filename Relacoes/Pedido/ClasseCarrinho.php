<?php
    class Carrinho{
        private $forma_pagamento;
        private $frete;
        private $lista_produto;

        public function set_forma_pagamento($f){
            $this->forma_pagamento = $f;
        }
        public function set_frete($cep){
            $this->frete = "Gratis";
            //imprementação futura
            //$this->frete = $cep; // errado

        }
        public function get_lista_produto()
        {
            return ($this->lista_produto);

        }
        public function get_forma_pagamento(){
            if($this->forma_pagamento ==null){
                return ("ainda não foi informado uma forma de pagamento");
            }else{
            return $this->forma_pagamento;
            }
        }
        public function get_frete(){
            if($this->forma_pagamento ==null){
                return ("ainda não foi informado uma forma de pagamento");
            }else{
                    return $this->frete;
                }
        }
        public function add_lista_produto(Produto $p)
        {
            $this->lista_produto[] = $p;
        }
        public function exibe_produtos(){
            if(sizeof($this->lista_produto) == 0){
               echo"Carrinho vazio.<br/>";
            }
            else
            {
            
                foreach($this->lista_produto as $p){
                    if(!isset($produto[$p->get_nome()]))
                    {
                        $produto[$p->get_nome()]['qnt'] = 1;
                        $produto[$p->get_nome()]['produto'] = $p;

                    }else{
                        $produto[$p->get_nome()]['qnt']++;
                    }
                }
                foreach($produto as $i=>$nome){
                    echo"(".$produto[$i]['qnt']."itens) ";
                    echo $produto[$i]["produto"]->exibe_dados();
                }
        
                echo"<br/>";


                echo"<hr />
                <form method='post' action ='pedido.php'>
                <input type='submit' value='Finalizar Compra'/>
                </form> <hr />
            "; 

            }
        }

    }
?>