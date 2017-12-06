
<form action="" method="POST">
	DIGITE O CEP: <input type="text" name="cep">
	<input type="submit">
</form>



<?php
if($_POST){
	$cep = $_POST['cep'];

	if(strlen($cep) == 8){
	$conteudo = json_decode(file_get_contents("http://viacep.com.br/ws/".$cep."/json/ "));


		if(!isset($conteudo->erro)){

			echo "CEP: ".$conteudo->cep;
			echo "<br>";
			echo "logradouro: ".$conteudo->logradouro;
			echo "<br>";
		    echo "Complemento: ".$conteudo->complemento;
		    echo "<br>";
		    echo "Localidade: ".$conteudo->localidade;
		    echo "<br>";
		    echo "Bairro: ".$conteudo->bairro;
	    	echo "<br>";
	    	echo "UF: ".$conteudo->uf;
		}else{
			echo "O Cep informado invalido";
		}
	}else{
		echo "Preencha o campo cep";
	}
}      
?>