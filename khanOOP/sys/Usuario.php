<?php 
require_once 'Crud.php';

class Usuario extends Crud
{
	protected $table = 'user';

	private $user_id;
	private $usuario;
	private $senha;

	public function __construct(){
		
	}

	public function setId($id){
		$this->user_id = $id;
	}

	public function getID(){
		return $this->user_id;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function insert(){
		$sql = "INSERT INTO $this->table (usuario, senha) VALUES (:usuario, :senha)";
		echo $this->usuario . " " . $this->senha . "<br>";

		$stmt = DB::prepare($sql);

		$stmt->bindParam(":usuario", $this->usuario);
		$stmt->bindParam(":senha", $this->senha);

		return $stmt->execute();
		
	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = ?, email = ? WHERE id = ?";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(1, $this->usuario);
		$stmt->bindParam(2, $this->senha);
		$stmt->bindParam(3, $id);
		return $stmt->execute();

	}
}

?>