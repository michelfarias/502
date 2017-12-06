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


$xml = '<?xml version="1.0" encoding="UTF-8"?>
<alunos>';

//print_r($result);
//exit;

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

$xml .= '</alunos>';

$apostilas = new SimpleXMLElement($xml);
echo "<pre>";
print_r($apostilas);

?>