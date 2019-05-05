<?php  $title = 'Admin'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Page administrateur</h1>

	<!--?php if (!$_SESSION['admin']) {
	header('location:connexion.php');
} ?-->
    
    <div class="form-row">
        
        <div class="form-group col-md-5">
            <h2>Ajouter un vendeur</h2>
            <div class="card" style="widht: 15rem;">
				<a href="gestion_vendeur.php"><img class="card-img-top" alt="Photo introuvable" src="/img/vendeur.jpg" ></a>
            </div>
        </div>
        
        <div class="form-group col-md-1"></div>
        
        <div class="form-group col-md-5">
            <h2>Ajouter un vendeur</h2>
            <div class="card" style="widht: 15rem;">
				<a href="gestion_items.php"><img class="card-img-top" alt="Photo introuvable" src="/img/item.png" ></a>
            </div>
        </div>
        
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>