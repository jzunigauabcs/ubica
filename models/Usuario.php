<?php 
	class Usuario {
		const TABLE = 'usuers';
		public $id;
		public $email;
		public $password;
		public $picture;
		
		function __construct()
		{
			require_once('../db/DB.php');
		}

		public function store()
		{
			try {
				$db = new DB();
				$dbh = $db->getConnection();
			}
		}
	}
 ?>