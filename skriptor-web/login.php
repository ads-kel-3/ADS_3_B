<?php
	session_start();

	if(isset($_SESSION['id'])) {
		header("location: index.php");
	} else {
	if(isset($_POST['login'])) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		$username = stripcslashes($username);
		$password = stripcslashes($password);

		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		mysql_connect("localhost", "root", "");
		mysql_select_db("ta_web");

		$result = mysql_query("SELECT * FROM login WHERE username = '$username' LIMIT 1");

		$row = mysql_fetch_array($result);

		$id = $row['id'];
		$db_password = $row['password'];

		if ($password == $db_password) {
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id;
				header("location: index.php");
			} else {
				echo "<div class='warning'>Wrong Username/Password!</div>";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SKRIPTOR</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body style="background-color: #2196f3; overflow: hidden;">
	<div class="login">
		<div class="lheader">SKRIPTOR</div>
		<div class="lform">
			<form action="login.php" method="POST">
				<input type="text" name="username" id="username" placeholder="username" required>
				<input type="password" name="password" id="password" placeholder="password" required>
				<input type="submit" name="login" id="login" value="submit">
				<a href="index.php"><input type="button" name="cancel" value="cancel"></a>
			</form>
		</div>	
	</div>
</body>
</html>
