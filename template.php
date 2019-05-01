<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS (Bootstrap, Font Awesome, custom) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- JS (jQuery, Popper, Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<?php include_once 'functions.php' ?>

</head>

<body>
	<!-- Element de titre -->
	<div class="jumbotron">
		<div class="container text-center">
			<a href="index.php"><img style="height: 100px;" src="img/logo.png"></a>
		</div>
	</div>
	
	<!-- Menu -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">
    		<img src="../img/logo_blanc_petit" height="25" class="d-inline-block align-top">
    		ECE Amazon
  		</a>

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarNavDropdown">
    		<ul class="navbar-nav">
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Catégories
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="#">Livres</a>
          				<a class="dropdown-item" href="#">Musique</a>
          				<a class="dropdown-item" href="#">Vêtements</a>
          				<a class="dropdown-item" href="#">Sports et Loisir</a>
        			</div>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Ventes flash</a>
      			</li>
				<li class="nav-item">
			    	<a class="nav-link" href="#">Vendre</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" href="#">Admin</a>
			  	</li>
      		</ul>

    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#"><i class="fa fa-user"></i>Votre compte</a>
     	 		</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</i></a>
      			</li>
    		</ul>
  		</div>
	</nav>

	<!-- Contenu de la page -->
	<div id="content">
		<?php $content ?>
	</div>

	<!-- Footer -->
	<footer>
  		<p>Online Store Copyright</p>  
		<form class="form-inline">Get deals:
			<input type="email" class="form-control" size="50" placeholder="Email Address">
			<button type="button" class="btn btn-danger">Sign Up</button>
		</form>
	</footer>

</body>
</html>