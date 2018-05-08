<?php
	session_start();
	session_destroy();
	header('location: index.php');
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>logout</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body style="background-color: #2196f3; overflow: hidden;">
	<div class="loader"></div>
</body>