
	<main>
	<?php 
		foreach ($posts as $key => $value) {
	?>
		<a href="/?id=<?php echo $value['id']?>"><?php echo $value['title']?></a><br>
	<?php		
		}
	?>
	</main>
