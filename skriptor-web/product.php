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
      <a id="logo-container" href="index.php" class="brand-logo">PRODUCT</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="Produk.php">Products</a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
		<?php echo($admin)?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		<li><a href="index.php">Home</a></li>
        <li><a href="Produk.php">Products</a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
<div class="w3-content w3-display-container">
  <img class="mySlides" src="img/s1.jpg" style="width:100%">
  <img class="mySlides" src="img/s2.jpg" style="width:100%">
  <img class="mySlides" src="img/s3.jpg" style="width:100%">

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
  
</div>

<div class="fullwidth">
 <h2 style="text-align: center; padding-top: 10px;"> Halaman Produk </h2>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/n1.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Produk 1 : Tittle 1<i class="material-icons right">more_vert</i></span>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">Deskripsi Produk<i class="material-icons right">close</i></span>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
				</div>
		  </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
			<div class="card-image waves-effect waves-block waves-light">
			  <img class="activator" src="img/n2.jpg">
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Produk 2 : Tittle 2<i class="material-icons right">more_vert</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Deskripsi Produk<i class="material-icons right">close</i></span>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		  </div>
        </div>

        <div class="col s12 m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/n3.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Produk 3 : Tittle 3<i class="material-icons right">more_vert</i></span>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">Deskripsi Produk<i class="material-icons right">close</i></span>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			  </div>	
        </div>
      </div>

    </div>
  </div>
</div>


<div class="fullwidth">
  <div class="container">
      <!--   Icon Section   -->
      <div class="row center">
        <div class="col s12 m3" style="margin: 0 10px">
          <a class="lightbox" href="#goofy">
			   <img src="img/s1.jpg"/>
			</a> 
			<div class="lightbox-target" id="goofy">
			   <img src="img/s1.jpg"/>
			   <a class="lightbox-close" href="#!"></a>
			</div>
        </div>

        <div class="col s12 m3"  style="margin: 0 10px">
          <a class="lightbox" href="#goofy2">
			   <img src="img/s2.jpg"/>
			</a> 
			<div class="lightbox-target" id="goofy2">
			   <img src="img/s2.jpg"/>
			   <a class="lightbox-close" href="#!"></a>
			</div>

		  </div>

        <div class="col s12 m3"  style="margin: 0 10px">
        <a class="lightbox" href="#goofy3">
		   <img src="img/s3.jpg"/>
		</a> 
		<div class="lightbox-target" id="goofy3">
		   <img src="img/s3.jpg"/>
		   <a class="lightbox-close" href="#!"></a>
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
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/function.js"></script>  
  </body>
</html>
