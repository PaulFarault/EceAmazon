<!-- Template du site Ece Amazon, comprend tous les éléments graphiques
    commun à toutes les pages -->

<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr" class="h-100">

    <!-- En-tête -->
    <head>
        <!-- Encodage -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Titre de la page -->
        <title><?=$title ?></title>
        <!-- Icone d'onglet navigateur -->
        <link rel="icon" href="img/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS (Bootstrap, Font Awesome, custom) -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- JS (jQuery, Popper, Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Appel du scripte functions -->
        <?php include_once 'functions.php' ?>
    </head>

    <!-- Corps -->
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
            <a class="navbar-brand" href="index.php">
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
                            <a class="dropdown-item" href="categories.php?c=livres">Livres</a>
                            <a class="dropdown-item" href="categories.php?c=musique">Musique</a>
                            <a class="dropdown-item" href="categories.php?c=vetements">Vêtements</a>
                            <a class="dropdown-item" href="categories.php?c=sports">Sports et Loisir</a>
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
        <footer class="page-footer font-small bg-dark pt-3">
            <div class="container">
                <div class="footer-copyright height=100px "  height="100px" > 
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <a href="https://www.linkedin.com/school/ece-paris/"><img src="/img/linkedin.png" height="30px">          </a>
                            <a href="https://twitter.com/IngenieursECE"><img src="/img/twitter.png" height="30px">          </a>
                            <a href="https://www.instagram.com/eceparis.lyon/?hl=fr"><img src="/img/instagram.png" height="30px">          </a>
                            <a href="https://www.ece.fr/ecole-ingenieur/"><img src="/img/classroom.png" height="30px"></a>
                        </div>
                        <div class="form-group col-md-7">
                            &copy; ECE Amazon : Projet Web Dynamique 2019 - Paul Faurault et Thomas Laurent
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>