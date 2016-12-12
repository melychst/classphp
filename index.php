<?php
function __autoload ($name) {
	require_once("class/".$name.".class.php");
}
$news = new News();
$news->connectDB();

if (!isset($_GET['id'])) {

	$posts = $news->getNewsAll();
	require_once("templates/allnews.php");

} elseif ( isset($_GET['id']) ) {
	$post = $news->getNewsOne($_GET['id']);

	require_once("templates/onenews.php");
} 







