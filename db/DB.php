<?php 
	class DB {
		const DB_HOST = 'localhost';
		public $DB_USER = 'homestead';
		public $DB_PASSWORD = 'secret';
		const DB_NAME = 'ubica';

		function __construct()
		{
		}

		function getConnection()
		{
			$dns = "mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME;
			$dbh = new PDO($dns, $this->DB_USER, $this->DB_PASSWORD);
			return $dbh;
		}
	}
 ?>