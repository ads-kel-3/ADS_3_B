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
      <a id="logo-container" href="index.php" class="brand-logo"><strong>SKRIPTOR</strong></a>
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

<div class="background-wrap">
	<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted"> 
		<source src="img/videobg.mp4" type="video/mp4">
		Video not supported
	</video>          
</div>
<div class="mycontent">         
	<h1>SKRIPTOR</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
 
 <div class="fullwidth">
   <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>*Selamat data di SKRIPTOR*</h4>
          <p class="justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
          <h4>*Kenapa Menggunakan SKRIPTOR?*</h4>
          <p class="justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
      </div>

    </div>
  </div>
</div>

  <div class="parallax-container valign-wrapper">
        <div class="row center">
          <h2 style="font-weight: bolder; background: #000000; color: #FFFFFF; padding: 10px 20px">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h2>
        </div>
    <div class="parallax"><img src="img/p1.jpg" alt="Unsplashed background img 2"></div>
  </div>

<div class="fullwidth">
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="mycard">
			  <img src="img/a2.png" alt="Jeanny" style="width:100%">
			  <div class="cardcontainer">
				<h4><b>Mahdiyyatul Fauziyyah</b></h4> 
				<p>150535600548</p> 
			  </div>
			</div>
        </div>

        <div class="col s12 m4">
          <div class="mycard">
			  <img src="img/a1.png" alt="Hasan" style="width:100%">
			  <div class="cardcontainer">
				<h4><b>Muchammad M. Hasan</b></h4> 
				<p>150535604934</p> 
			  </div>
			</div>
        </div>

        <div class="col s12 m4">
          <div class="mycard">
			  <img src="img/a3.png" alt="Kamal" style="width:100%">
			  <div class="cardcontainer">
				<h4><b>Nadiyah P. Dewi</b></h4> 
				<p>150535600968</p> 
			  </div>
			</div>
        </div>
      </div>

    </div>
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


  </body>
</html>
