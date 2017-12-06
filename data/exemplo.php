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


$maisNovo="";
$maisVelho="";

foreach($result as $key => $value){
	$alunos[$key] = [
						"nome" => $value["nome"],
						"dt_nasc" => new DateTime($value["dt_nasc"])
					];

	

	if($maisNovo == ""){
		$maisNovo = strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"));
		$maisVelho = strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"));
	}

	if($maisNovo > strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"))){	
		$maisNovo = strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"));
	}

	if($maisVelho < strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"))){
		$maisVelho = strtotime($alunos[$key]['dt_nasc']->format("d-m-Y"));
	}


}

echo date("d/m/Y",$maisNovo);
echo "<br>";
echo date("d/m/Y",$maisVelho);

$data1 = new DateTime(date("d/m/Y",$maisNovo));
echo "<br>";
echo $data1;

?>