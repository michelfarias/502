<?php

$user = "linux";
$pass = "123";
$host = "localhost";
$dbname = "dexterescola";
$dsn = "pgsql: host={$host}; dbname={$dbname}";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM tb_alunos ORDER BY id";

$prepare = $pdo->query($sql);
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

/*
//print_r($result);

foreach($result as $key => $value){
	 $xml .='<aluno>
        			<nome>'.$value["nome"].'</nome>
        			<email>'.$value["email"].'</email>
        			<senha>'.$value["senha"].'</senha>
        			<cpf>'.$value["cpf"].'</cpf>
        			<rg>'.$value["rg"].'</rg>
        			<dt_nasc>'.$value["dt_nasc"].'</dt_nasc>
    			</aluno>';
}


*/

$xml = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8'?><alunos></alunos>");

foreach($result as $key => $value){
	$item = $xml->addChild('aluno');
	$item->addChild('nome', $value["nome"]);
	$item->addChild('email', $value["email"]);
	$item->addChild('senha', $value["senha"]);
	$item->addChild('cpf', $value["cpf"]);
	$item->addChild('rg', $value["rg"]);
	$item->addChild('dt_nasc', $value["dt_nasc"]);
}

//echo $xml->asXML();

echo json_encode($result, true);

?>