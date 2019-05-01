<?php require_once('config.php'); ?>

<?php  $title = 'Catégories'; ?>

<?php ob_start(); ?>

	<h1><?php echo($title); ?></h1>

	<div class="row">
		<?php $sql = "SELECT * FROM categorie";

		if($resultat = mysqli_query($db,$sql)) {  
			while ($ligne = mysqli_fetch_assoc($resultat)) { ?>

				<div class="col-sm-3">
					<div class="panel panel-default">
				        <div class="panel-heading"><h3><?php echo($ligne["nom"]); ?></h3></div>
				        <div class="panel-body"><img class="img-responsive" style="background-size: 50px 50px;" alt="Image" src=<?php printf('"%s"', $ligne["image"]); ?>></div>
				        <div class="panel-footer"><?php echo($ligne["description"]); ?></div>
		      		</div>
				</div>

		<?php
			}
		} ?>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>