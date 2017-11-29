<?php
require("Calculadora.php");

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase {

	private $calculadora;

	public function setUp(){
		$this->calculadora = new Calculadora(3,3);
	}

	public function testSame(){
		$this->assertSame(6,$this->calculadora->getSoma());
	}

	public function testSubstracao(){
		$this->assertSame(3,$this->calculadora->getSubtracao());
	}

	public function testDivisao(){
		$this->assertSame(1,$this->calculadora->getDivisao());
	}

	public function testMultiplicacao(){
		$this->assertSame(6,$this->calculadora->getMultiplicacao());
	}




}

?>