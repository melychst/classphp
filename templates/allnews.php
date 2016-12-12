<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All news</title>
</head>
<body>
	<head>Header</head>
	<main>
	<?php 
		foreach ($posts as $key => $value) {
	?>
		<a href="/?id=<?php echo $value['id']?>"><?php echo $value['title']?></a><br>
	<?php		
		}
	?>
	</main>
	<footer>Fotter</footer>
</body>
</html>