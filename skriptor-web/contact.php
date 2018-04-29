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

	$nama = ($_POST['nama']);
	$umur = ($_POST['umur']);
	$email = ($_POST['email']);
	$genre = implode(" - ",$_POST['genre']);
	$kritiksaran = ($_POST['kritiksaran']);

	$sql = "INSERT INTO survey VALUES ('".$nama."', '".$umur."', '".$email."', '".$genre."', '".$kritiksaran."')";
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
  <title>SKRIPTOR</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/w3.css">
</head>
<body>
<nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">CONTACT US</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
		<?php echo($admin)?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		<li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
<div class="formcontainer">
    <form method="POST" action="survey.php">
    	<div class="row center">
			<h2>Survey</h2>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="nama" type="text" name="nama" class="validate" pattern=[a-zA-Z ] required>
			  <label for="nama">Nama</label>
			</div>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="umur" type="number" name="umur" class="validate" required>
			  <label for="umur">Umur</label>
			</div>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="email" type="email" name="email" class="validate" required>
			  <label for="email">Email</label>
			</div>
      	</div>
  		<div class="row">
			<div class="input-field">
			  <textarea id="kritiksaran" name="kritiksaran" class="materialize-textarea"></textarea>
			  <label for="kritiksaran">Kritik dan Saran</label>
			</div>
    	</div> 
      	<div class="row center">
		  	<button class="btn waves-effect waves-light" type="submit" name="submit" id="submit" value="submit">Submit
			<i class="material-icons right">send</i>
		  	</button>
    	</div>
    </form>
</div>

<div class="formresultcontainer">
<button class="accordion">Hasil Survey</button>
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

	$sqlselect = "SELECT nama, umur, email, genre, kritiksaran FROM survey";
	$result = $conn->query($sqlselect);

	echo "<hr />";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "".$row["nama"].", ".$row["umur"].", ".$row["email"].", ".$row["genre"].", ".$row["kritiksaran"]."<hr />";
		}
	} else {
		echo "0 results";
	}
?>
	</div>
</div>

<footer class="page-footer">
  <div class="footer-copyright">
	<div class="container"> © 2018 Skriptor by ADS-3
	<a class="grey-text text-lighten-4 right" href="#">S1 Teknik Informatika B</a>
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
	
	<script language='javascript'>
function validHuruf(h)
	{
		if(!/^[a-zA-Z.].+$/.test(h.value))
		{
			h.value = h.value.substring(0,h.value.length-500);
		}
	}
</script>
  </body>
</html>
