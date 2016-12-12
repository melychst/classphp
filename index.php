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

class  News extends Db {

	public function getNewsAll() {
		$sql = "SELECT id, title, content FROM news";
		$res = mysql_query($sql);

		if ( !$res ) {
			exit("No news");
		}
		return $res;
	}

		public function getNewsOne($id) {
		$sql = "SELECT id, title, content FROM news WHERE id=$id";
		$res = mysql_query($sql);

		if ( !$res ) {
			exit("ERROR");
		}
		return $res;
	}
}

$news = new News();
$news->connectDB();

if (!isset($_GET['id'])) {
	$newsArray = $news->getNewsAll();
	while ( $row = mysql_fetch_assoc($newsArray) ) {
		echo "<a href='http://classphp/?id=".$row['id']."'>".$row['title']."</a></br>";
	}
} elseif ( isset($_GET['id']) ) {
	$newsArray = $news->getNewsOne($_GET['id']);
	$row = mysql_fetch_assoc($newsArray);

	echo "<h2>".$row['title']."</h2>";

	echo "<p>".$row['content']."</p>";

	echo "<p><a href='http://classphp'>Back</a>";
} 







