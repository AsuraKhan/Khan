<?php 
require_once 'Crud.php';
require_once "Usuario.php";

class Noticia extends Crud{

	protected $table = 'noticia';

	private $id;
	private $noticia_titulo;
	private $mensagem;
	private $data_mensagem;
	private $user_id;

	//public function __construct($id, $mensagem, $data_mensagem, $categoria, $tags, $user_id){
	//	$this->id = $id;
	//	$this->mensagem = $mensagem;
	//	$this->data_mensagem = $mensagem;
	//	$this->categoria = $categoria;
	//	$this->tags = $tags;
	//	$this->user_id = $user_id;
	//}

	

	public function __construct(){
		
	}

	public function setId($id){
		$this->user_id = $id;
	}

	public function getId(){
		return $this->user_id;
	}

	public function setNoticia_titulo($noticia_titulo){
		$this->noticia_titulo = $noticia_titulo;
	}

	public function getNoticia_titulo(){
		return $this->noticia_titulo;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getMensagem(){
		return $this->mensagem;
	}

	public function setDataMensagem($data_mensagem){
		$this->data_mensagem = $data_mensagem;
	}

	public function getDataMensagem(){
		return $this->data_mensagem;
	}

	public function setUserID($user_id){
		$this->user_id = $user_id;
	}

	public function getUserID(){
		return $this->user_id;
	}

	public function insert(){
		$sql = "INSERT INTO $this->table (noticia_titulo, mensagem) VALUES (:noticia_titulo, :mensagem)";
		$stmt = DB::prepare($sql);

		$stmt->bindParam(":noticia_titulo", $this->noticia_titulo);
		$stmt->bindParam(":mensagem", $this->mensagem);

		return $stmt->execute();
		
	}

	public function update($id){

		$sql  = "UPDATE $this->table SET noticia_titulo = ?, mensagem = ? WHERE id = ?";

		$stmt = DB::prepare($sql);

		$stmt->bindParam(1, $this->noticia_titulo);
		$stmt->bindParam(2, $this->mensagem);
		$stmt->bindParam(3, $id);

		return $stmt->execute();

	}
}
 ?>