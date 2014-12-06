<?php

namespace NgakakSeru\Database;

class Connection
{
	public static function getConnection(array $config)
	{
        $host   = $config['host'];
        $dbname = $config['dbname'];

		$user     = $config['user'];
		$password = $config['password'];

        $driver = $config['driver'];

		$dsn = "$driver:dbname=$dbname;host=$host";
		
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
