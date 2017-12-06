<?php

namespace Controller\ApiController;

use Controller\AlunoController\AlunoController;

class ApiController
{
	public function run()
	{
		echo 'teste';
		exit;

		$method = $_SERVER['REQUEST_METHOD'];
		$alunos = new AlunoController();

			
			switch ($rota) {

				case 'alunos':
					switch ($method) {
						case 'GET':
							

							break;
						case 'POST':

							break;
						case 'PUT':

							break;
						case 'DELETE':

							break;
						
						default:
							# code...
							break;
					}





					break;
				
				default:
					echo "Rota invalida";
					break;
			}

	}



}
?>