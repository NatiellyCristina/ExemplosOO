<?php

class Calculadora{
	
	public $op1;
	public $op2;
	private $resultado;
	
	private function soma(){
		$this->resultado = 
			$this->op1 + $this->op2;
	}

	private function subtracao(){
		$this->resultado = 
			$this->op1 - $this->op2;
	}	

	private function multiplicacao(){
		$this->resultado = 
			$this->op1 * $this->op2;
	}

	private function divisao(){
		if($this->op2!=0){
			$this->resultado = 
				$this->op1/$this->op2;
		}else{
			$this->resultado = 
				"<b>Operação não permitida: Divisão por zero</b>";
		}
	}
	
	public function operacoes($o){
		switch($o){
			case "+":
				$this->soma();
				echo "<br />Soma: " . $this->resultado;
				break;
			case "-":
				$this->subtracao();
				echo "<br />Subtração: " . $this->resultado;
				break;
			case "*":
				$this->multiplicacao();
				echo "<br />Multiplicação: " . $this->resultado;
				break;
			case "/":
				$this->divisao();
				echo "<br />Divisão: " . $this->resultado;
				break;
			default:
				echo "Operação inválida";
			}
	}
	
}


?>