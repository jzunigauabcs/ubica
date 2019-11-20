<?php 
class Usuario {

	const TABLE = 'users';
	public $id;
	public $email;
	public $password;
	public $picture;

	function __construct()
	{
		require_once('./db/DB.php');
	}

	public function save()
	{
		try {
			$db = new DB();
			$dbh= $db->getConnection();
			$query = "INSERT INTO " . self::TABLE . "(email, password, picture) VALUES(:email, sha1(:password), :picture)";
			$stm = $dbh->prepare($query);
			$stm->bindParam(':email', $this->email);
			$stm->bindParam(':password', $this->password);
			$stm->bindParam(':picture', $this->picture);

			$stm->execute();

		}catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>