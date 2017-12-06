<?php
namespace Controller\AlunoController;

class AlunoController
{
	public static function all(){
		return "Todos alunos";
	}

	public static function find($id){
		return "Aluno por ID";
	}

	public static function insert(array $data){
		return "Aluno Inserido";
	}

	public static function update(array $data){
		return "Aluno Atualizado";
	}

	public static function delete(array $data){
		return "Aluno Deletado";
	}

/*
	$id = isset($_GET['id']) ? $_GET['id'] : null;


							if($id){
								$result = json_encode($alunos->find($id));
								print_r($result);
							}else{
								$result = json_encode($alunos->all());
								print_r($result);
								echo 'teste';
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
*/


}
?>