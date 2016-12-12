<?php

class Db {
	const USER = "root";
	const PASSWORD = "";
	const HOST = "localhost";
	
	public function connectDB() {
		$db = mysql_connect(self::HOST, self::USER, self::PASSWORD) or die("Error");
		mysql_select_db("classphp", $db) or die("Error select table");
	}
}