<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="icon" href="img/favicon.ico" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/styles.css">

	<?php include_once 'functions.php' ?>

</head>

<body>
		<div class="jumbotron">
			<div class="container text-center">
				<a href="index.php"><img style="height: 100px;" src="img/logo.png"></a>
			</div>
		</div>
					<!--https://stackoverflow.com/questions/11813498/make-twitter-bootstrap-navbar-link-active
					et https://www.php.net/manual/fr/reserved.variables.server.php -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">

			<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#"><img style="height:20px" src="img/logo_blanc_petit.png"></a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
	      		<ul class="nav navbar-nav">
	        		<li <?=echoActiveClassIfRequestMatches("categories")?>>
	        			<div class="dropdown">
	        				<button class="dropbtn">
		        				<a href="categories.php">Catégories</a>
		        				<i class="dropbtn"></i>
	        				</button>
	        				<div class="dropdown-content">
	        					<a href="#">Link1</a>
	        					<a href="#">Link1</a>
	        					<a href="#">Link1</a>
	        				</div>
	        			</div>
	        		</li>
	        		<li <?=echoActiveClassIfRequestMatches("ventes-flash")?>><a href="ventes-flash.php">Ventes flash</a></li>
	        		<li <?=echoActiveClassIfRequestMatches("vendre")?>><a href="vendre.php">Vendre</a></li>
	        		<li <?=echoActiveClassIfRequestMatches("admin")?>><a href="admin.php">Admin</a></li>
	      		</ul>

	      		<ul class="nav navbar-nav navbar-right">
	        		<li <?=echoActiveClassIfRequestMatches("compte")?>><a href="compte.php"><span class="glyphicon glyphicon-user"></span> Votre compte</a></li>
	        		<li <?=echoActiveClassIfRequestMatches("panier")?>><a href="panier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
	        	</ul>
      		</div>
      	</div>
		</nav>

		<div id="content">
	<?= $content ?></div>

	<footer>
  		<p>Online Store Copyright</p>  
		<form class="form-inline">Get deals:
			<input type="email" class="form-control" size="50" placeholder="Email Address">
			<button type="button" class="btn btn-danger">Sign Up</button>
		</form>
	</footer>

</body>
</html>