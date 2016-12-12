<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<head>Header</head>
	<main>

		<h2><?php echo $post['title']?></h2>
		<div class="content">
			<?php echo $post['content']?>
		</div>
		<div class="content-footer">
			<a href="http://classphp">Back</a>
		</div>
	</main>
	<footer>Footer</footer>
</body>
</html>