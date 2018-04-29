<?php 
	session_start();

	if(isset($_SESSION['id'])) {
		$status = 'logout';
		$ref = 'logout.php';
		if($_SESSION['username'] == 'admin') {$admin = '<li><a href="admin.php">Admin Page</a></li>';}
		else {$admin = null;}
	}
	else {
		$status = 'login';
		$ref = 'login.php';
		$admin = null;
	}
?>

<?php
if(isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ta_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$sql = "INSERT INTO login(username, password) VALUES ('".$username."', '".$password."')";
	if ($conn->query($sql) === TRUE) {
    echo null;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/w3.css">
</head>
<body>
<nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">Music</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="survey.php">Survey</a></li>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
		<?php echo($admin)?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		<li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="survey.php">Survey</a></li>
        <?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
<div class="formcontainer">
    <form method="POST" action="admin.php">
    	<div class="row center">
			<h2>Survey</h2>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="username" type="text" name="username" class="validate" required>
			  <label for="username">Username</label>
			</div>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="password" type="password" name="password" class="validate" required>
			  <label for="password">Password</label>
			</div>
      	</div>
      	<div class="row center">
		  	<button class="btn waves-effect waves-light" type="submit" name="submit" id="submit" value="submit">New User
			<i class="material-icons right">send</i>
		  	</button>
    	</div>
    </form>
</div>

<div class="formresultcontainer">
<button class="accordion">Daftar User</button>
	<div class="panel">
  
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ta_web";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	} 

	$sqlselect = "SELECT * FROM login WHERE username != 'admin'";
	$result = $conn->query($sqlselect);

	echo "<hr />";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "".$row["id"]." -- ".$row["username"]." -- ".$row["password"]."<hr />";
		}
	} else {
		echo "0 results";
	}
?>
	</div>
</div>

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/function.js"></script>
  <script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
	  }
	}
	</script>
  </body>
</html>
