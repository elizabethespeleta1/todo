<!DOCTYPE html>
<html>
<head>
	<title> Simple To-Do List </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
		<div class= "task-list">
			<ul>
			<!-- getting info from connect.php -->
			<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<form class="add-new-task" autocomplete="off">
			<input type="type" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
</html>