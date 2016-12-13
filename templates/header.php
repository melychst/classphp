<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title><?php echo $post['title']?></title>
	<script src="../js/angular.min.js">	</script>
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/customAngular.js"></script>
	<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="scope-angular" ng-controller="myCtrl">
	{{var}}
</div>
	<head>Header</head>