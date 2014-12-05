<?php

namespace NgakakSeru\Database;

class Connection
{
	public static function getConnection()
	{
		$dsn = 'mysql:dbname=ngakakseru;host=127.0.0.1';
		$user = 'root';
		$password = '';

		$pdo = null;
		
		try {
			$pdo = new \PDO($dsn, $user, $password);
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
		
		return $pdo;
	}
}
