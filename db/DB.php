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
			$dsn = "mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME;
			$dbh = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
			$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);
			$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

			return $dbh;
		}
	}
 ?>