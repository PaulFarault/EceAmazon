<!-- Page Administrateur où l'utilisateur ayant un statut d'administrateur peut gérer
    les articles et les vendeurs -->


<?php  $title = 'Admin'; ?>
<?php ob_start(); ?>


<div id="content">
    <!-- Titre -->
	<h1>Page administrateur</h1><br><br>

    <!-- Connexion à partir de la page, n'ayant pas pu être implémantée -->
	<!--?php if (!$_SESSION['admin']) {
	header('location:connexion.php');
    } ?-->
    
    
    <div class="form-row">
        <!-- Espacement -->
        <div class="form-group col-md-1">
        </div>
        
        <!-- Gestion des vendeurs -->
        <div class="form-group col-md-4">
            <h2>Gestion des vendeurs</h2>
            <div class="card" style="widht: 18rem;">
				<a href="gestion_vendeur.php"><img class="card-img-top" alt="Photo introuvable" src="/img/vendeur.jpg"></a>
            </div>
        </div>
        
        <!-- Espacement -->
        <div class="form-group col-md-2"></div>
        
        <!-- Gestion des articles -->
        <div class="form-group col-md-4">
            <h2>Gestion des articles</h2>
            <div class="card" style="widht: 18rem;">
				<a href="gestion_items.php"><img class="card-img-top" alt="Photo introuvable" src="/img/item.png" ></a>
            </div>
        </div>
        
    </div>

</div>

<!-- Appel du template -->
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>