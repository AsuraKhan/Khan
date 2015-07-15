<?php 

require_once "config.php";

class DB{

	public static $conn;

	public function __construct() {
        //
    }

	public static function getInstance(){

		try {
			self::$conn = new PDO("mysql:host=" . HOST . ";dbname=". DBNAME, USER, PASS);
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		} catch (PDOException $e){
	 		echo "Connection failed: " . $e->getMessage();
		}
		return self::$conn;
	}

	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}
		
}
?>