<?php
class  News extends Db {

	public function getNewsAll() {
		
		$posts = [];
		$sql = "SELECT id, title, content FROM news";
		$res = mysql_query($sql);

		if ( !$res ) {
			exit("No news");
		}

		while ( $row = mysql_fetch_assoc($res) ) {
			$posts[] = $row;
		}
		return $posts;
	}

		public function getNewsOne($id) {
		$sql = "SELECT id, title, content FROM news WHERE id=$id";
		$res = mysql_query($sql);

		if ( !$res ) {
			exit("ERROR");
		}

		$post = mysql_fetch_assoc($res);
		return $post;
	}
}