<?php


    class Pedido{


        private $carrinho;
        private $status;
        public function __construct(Carrinho $c){
            $this->carrinho = $c;
            $this->status = "Aguardando Pagamento";
        }
        public function exibe_resumo(){
            $lista_produto = $this->carrinho->get_lista_produto();
            foreach($lista_produto as $p){
                if(!isset($produto[$p->get_nome()]))
                {
                    $produto[$p->get_nome()]['qnt'] = 1;
                    $produto[$p->get_nome()]['produto'] = $p;

                }else{
                    $produto[$p->get_nome()]['qnt']++;
                }
            }
            $total = 0;
            foreach($produto as $i=>$nome){
                echo $produto[$i]['qnt']."x ";
                echo" - ";
                echo $produto[$i]["produto"]->get_nome();
                echo" - ";
                echo $produto[$i]["produto"]->get_preco();
                echo" =";
                echo $produto[$i]["produto"]->get_preco() * $produto[$i]['qnt'];
                echo"<br />";
                $total = $total + $produto[$i]['produto']->get_preco()*$produto[$i];
            }
            echo"<hr /> Total: ".$total."<hr />";
            echo"<br/>";


            echo"<hr />
            <input type='submit' value='Finalizar Pedido'/>
            <hr />
        "; 
        }
    }














?>