<?php
require("Estoque.php");

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;

	public function setUp(){
		$this->estoque = new Estoque();
	}

	public function testeAddItem(){
		$item = "Bluxa X";
		$quantidade = 10;

		
		$this->estoque->addItem($item, $quantidade);

		$this->assertSame($quantidade, $this->estoque->getItem($item));
	}

	public function testSomaQuantidade(){
		$item = "Blusa X";
		$quantidade = 10;

		//$estoque->addItem($item, $quantidade);
		$this->estoque->addItem($item, 1);
		$this->estoque->addItem($item, 2);
		$this->estoque->addItem($item, 3);

		$this->assertSame(6, $this->estoque->getItem($item));

	}

	/**
	@expectedException InvalidArgumentException
	@expectedExceptionMessage Item nao existe no estoque
	*/

	public function testItemInvalido(){
		$this->estoque->getItem("Blusa Y");
	}

		public function testRemoveQuantidade(){
		$this->estoque->addItem("blusa A",10);

		$this->estoque->removeItem("blusa A",4);

		$this->assertSame(6,$this->estoque->getItem("blusa A"));

	}


}
?>