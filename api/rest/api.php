<?php
require("alunos.php");
$method = $_SERVER['REQUEST_METHOD'];
$alunos = new Alunos();

switch($method){
	case 'GET':

	$id = isset($_GET['id']) ? $_GET['id'] : null;

		if($id){
			$result = json_encode($alunos->find($id));
			print_r($result);
		}else{
			$result = json_encode($alunos->all());
			print_r($result);
		}

		if($result){
			header('HTTP:1.1 200');
			header('Content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "ok",
					"data" => $result,
					"message" => "" 
				]);
		}else{
			header('HTTP/1.1 204');
			header('content-type:application/json; charset=UTF-8');
			echo json_encode([
					"status" => "erro",
					"data" => "",
					"message" => "Dados nao enconstrados"
				]);
		}

		

	break;

	case 'POST':
		$data = file_get_contents("php://input");
		$data = json_decode($data, true);

		$result = $alunos->insert($data);
		var_dump($result);
	break;

	case 'PUT':
		echo 'METODO PUT';
	break;

	case 'DELETE':
		echo 'DELETE';
	break;
	
	default:
		echo 'METODO INVALIDO';
	break;
}
?>