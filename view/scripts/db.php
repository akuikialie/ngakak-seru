<?php
//Hostname - normaly localhost
//DBusername - your mysql username
//DBpassword - your mysql password
//DBname - your mysql database name
class DatabaseConnectionManager
{
	public function createConnection()
	{
		$db = new PDO('mysql:host=localhost;dbname=ngakakseru', 'root', 'master753');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $db;
	}
}
?>