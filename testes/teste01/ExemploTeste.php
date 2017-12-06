<?php
use PHPUnit\Framework\TestCase;

class ExemploTeste extends TestCase 
{
	public function testSame(){
		$soma = 2+3;

		$this->assertSame(5,$soma);



	}

	public function testTrue(){
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);
	}

	public function testFalse(){
		$falso = true;
		$this->assertFalse($falso);
	}

	public function testeCount(){
		$array = [0,1,2];

		$this->assertCount(3,$array);

	}

	public function testEmpty(){
		$vazio = "";

		$this->assertEmpty($vazio);
	}

	public function testNull(){
		$vazio = NULL;

		$this->assertNull($vazio);
	}

	public function testEqual(){
		$a = "1";
		$b = 1;

		$this->assertEquals($a,$b);

	}


}

?>