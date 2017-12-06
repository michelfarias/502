<?php

class Alunos {
	private $user = "linux";
	private $pass = "123";
	private $dsn = "pgsql: host=localhost; dbname=dexterescola";
	private $con = null;


	public function __construct(){
		$this->con = new PDO($this->dsn, $this->user, $this->pass);
	}

	public function all(){
		$prepare = $this->con->query("SELECT * FROM tb_alunos ORDER BY id");
		$prepare->execute();
		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function find($id){
		$sql = "SELECT * FROM tb_alunos WHERE id=:id";

		$stmt = $this->con->prepare($sql);
		

		$stmt->bindParam(":id",$id);

		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}

	public function insert(array $aluno){
		$sql = "INSERT INTO tb_alunos (nome,email,senha,cpf,rg,dt_nasc) VALUES (:nome,:email,:senha,:cpf,:rg,:dt_nasc)";
		try {
			$nome = $aluno['nome'];
			$email = $aluno['email'];
			$senha = $aluno['senha'];
			$cpf = $aluno['cpf'];
			$rg = $aluno['rg'];
			$dt_nasc = $aluno['dt_nasc'];
			
			$this->con->beginTransaction();
			$stmt = $this->con->prepare($sql);
			$stmt->bindParam(":nome", $nome);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":senha", $senha);
			$stmt->bindParam(":cpf", $cpf);
			$stmt->bindParam(":rg", $rg);
			$stmt->bindParam(":dt_nasc", $dt_nasc);
			$stmt->execute();
			return $this->con->commit();

		} catch (PDOException $e) {
			$this->con->rollback();
			// $this->log("Erro -> {$e->getMessage()}") ;
			$_SESSION['erro'] = "Erro ao Atualizar Periodo";
		}
	}


	
	public function update(array $aluno){
		/*
		$sql = "UPDATE tb_alunos SET nome = :nome, email = :email,senha = :senha,cpf = :cpf,rg = :rg WHERE id = :id";
		try {
			$id = $aluno->getId();
			$nome = $aluno->getNome();
			$email = $aluno->getEmail();
			$senha = $aluno->getSenha();
			$cpf = $aluno->getCpf();
			$rg = $aluno->getRg();
			// $dt_nasc = $aluno->getDtNasc();
			$this->con->beginTransaction();
			$stmt = $this->con->prepare($sql);
			$stmt->bindParam(":nome", $nome);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":senha", $senha);
			$stmt->bindParam(":cpf", $cpf);
			$stmt->bindParam(":rg", $rg);
			// $stmt->bindParam(":dt_nasc", $dt_nasc);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$this->con->commit();
			$_SESSION['sucesso'] = "Atualizado Com Sucesso";	
		} catch (PDOException $e) {
			$this->con->rollback();
			// $this->log("Erro -> {$e->getMessage()}") ;
			print_r($e->getMessage());
			die();
			$_SESSION['erro'] = "Erro ao Atualizar Periodo";
		}

		*/
	}


	public function delete(array $aluno){
		/*
		$sql = "DELETE FROM tb_alunos WHERE id = :id";
		try {
			$id = $aluno->getId();
			$this->con->beginTransaction();
			$stmt = $this->con->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$this->con->commit();
			$_SESSION['sucesso'] = "Excluido Com Sucesso";	
		} catch (PDOException $e) {
			$this->con->rollback();
			// $this->log("Erro -> {$e->getMessage()}") ;
			$_SESSION['erro'] = "Erro ao Excluir Periodo";
		}
		*/
	}






}
	
?>