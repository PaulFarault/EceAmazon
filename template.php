<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title ?></title>
  <link rel="icon" href="img/favicon.ico" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS (Bootstrap, Font Awesome, custom) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- JS (jQuery, Popper, Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php include_once 'functions.php' ?>

</head>

<body class="d-flex flex-column h-100">
	<!-- Element de titre -->
	<div class="jumbotron">
		<div class="container text-center">
			<a href="index.php"><img style="height: 100px;" src="img/logo.png"></a>
		</div>
	</div>
	
	<!-- Menu -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <!-- Petit logo et Ece Amazon ramenant à la page index -->
  		<a class="navbar-brand" href="#">
    		<img src="img/logo_blanc_petit" height="25" class="d-inline-block align-top">
    		ECE Amazon
  		</a>

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarNavDropdown">
    		<ul class="navbar-nav">
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="categories.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Catégories
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="categories.php">Livres</a>
          				<a class="dropdown-item" href="categories.php">Musique</a>
          				<a class="dropdown-item" href="categories.php">Vêtements</a>
          				<a class="dropdown-item" href="categories.php">Sports et Loisir</a>
        			</div>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="ventes-flash.php">Ventes flash</a>
      			</li>
				<li class="nav-item">
			    	<a class="nav-link" href="vendre.php">Vendre</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" href="admin.php">Admin</a>
			  	</li>
      		</ul>

    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="compte.php"><i class="fa fa-user"></i> Votre compte</a>
     	 		</li>
      			<li class="nav-item">
        			<a class="nav-link" href="panier.php"><i class="fa fa-shopping-cart"></i> Panier</a>
      			</li>
    		</ul>
  		</div>
	</nav>

	<!-- Contenu de la page -->
	<div id="content">
		<?=$content ?>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small bg-dark pt-2">
    <div class="container">
      <div class="row">
        <!-- Colonne gauche : contact-->
        <div class="col-md-4">
          <a href="mailto:thomas.laurent@edu.ece.fr"><p>Nous contacter par mail</p></a>
        </div>
        <!-- Colonne droite : copyright-->
        <div class="col-md-8 ">
            <p>&copy; ECE Amazon : Projet Web Dynamique 2019 - Paul Faurault et Thomas LAURENT</p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>