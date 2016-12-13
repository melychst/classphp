<?php
function __autoload ($name) {
	require_once("class/".$name.".class.php");
}

//$testInterface = new NewSomeInterface();
//$testInterface->SomeFunc();

$news = new News();
$news->connectDB();

require_once("templates/header.php");

if (!isset($_GET['id'])) {

	$posts = $news->getNewsAll();
	require_once("templates/allnews.php");

} elseif ( isset($_GET['id']) ) {
	$post = $news->getNewsOne($_GET['id']);
	require_once("templates/onenews.php");
	require_once("templates/comments.php");
} 

require_once("templates/footer.php");





