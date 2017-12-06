<?php
class Estoque {
	private $itens = [];


	public function addItem($item,$qtd){
		
		if(isset($this->itens[$item])){
			$this->itens[$item] += $qtd;
		}else{
			$this->itens[$item] = $qtd;
		}
	}

	public function getItem($item){
		
		if(isset($this->itens[$item])){
			return $this->itens[$item];
		}

		throw new InvalidArgumentException("Item nao existe no estoque");
		
	}

	public function removeItem($item, $quantidade){
		if(isset($this->itens[$item])){
			$this->itens[$item] = $quantidade;
		}

		return $this;
	}
}
?>