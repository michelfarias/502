<?php
class Calculadora {
	private $num1;
	private $num2;

	public function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function getSoma(){
		return $this->num1 + $this->num2;
	}

	public function getSubtracao(){
		return $this->num1 - $this->num2;
	}

	public function getDivisao(){
		return $this->num1 / $this->num2;
	}

	public function getMultiplicacao(){
		return $this->num1 * $this->num2;
	}
	
}

$a=1;
?>