<?php 
class Usuario {

	const TABLE = 'users';
	public $id;
	public $email;
	public $password;
	public $picture;

	function __construct()
	{
	}

	public function save()
	{
		try {
			require_once($_SERVER['DOCUMENT_ROOT'].'/db/DB.php');
			$db = new DB();
			$dbh= $db->getConnection();
			$query = "INSERT INTO " . self::TABLE . "(email, password, picture) VALUES(:email, sha1(:password), :picture)";
			$stm = $dbh->prepare($query);
			$stm->bindParam(':email', $this->email);
			$stm->bindParam(':password', $this->password);
			$stm->bindParam(':picture', $this->picture);

			$stm->execute();
			return $stm->rowCount();

		}catch(PDOException $e) {
			return -1;
		}
	}

	public static function findByEmail($email) 
	{ 
		try {
			require_once($_SERVER['DOCUMENT_ROOT'].'/db/DB.php');
			$db = new DB();
			$dbh= $db->getConnection();
			$query = "SELECT * FROM " . self::TABLE . " WHERE email = :email";
			$stm = $dbh->prepare($query);
			$stm->bindParam(':email', $email);
			$stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Usuario');
			$stm->execute();
			
			if($usuario=$stm->fetch())
				return $usuario;
			return null;

		}catch(PDOException $e) {
			return null;
		}
	}
}
?>