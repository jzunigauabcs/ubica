<?php 
	class DB {

		const DB_HOST = 'localhost';
		const DB_NAME = 'ubica';
		private $DB_USER = 'homestead';
		private $DB_PASSWORD = 'secret';

		function __construct()
		{

		}

		public function getConnection()
		{
			$dsn = "mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME;
			$dbh = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
			return $dbh;
		}
	}
 ?>