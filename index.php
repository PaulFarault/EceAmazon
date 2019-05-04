<?php require_once('config.php'); ?>

<?php  $title = 'ECE Amazon'; ?>

<?php ob_start(); ?>

	<h1><?php echo($title); ?></h1>

	<div class="row">
		<?php $sql = "SELECT * FROM categorie";

		if($resultat = mysqli_query($db,$sql)) { 
			while ($ligne = mysqli_fetch_assoc($resultat)) { ?>
				<div class="col-sm-3">
					<div class="card" style="widht: 18rem;">
						<img class="card-img-top" alt="Photo introuvable" src=<?php printf('"%s"', $ligne['image']);?>>
						<div class="card-body">
    						<h5 class="card-title"><?php echo(utf8_encode($ligne["nom"])); ?></h5>
    						<p class="card-text"><?php echo(utf8_encode($ligne["description"])); ?></p>
  						</div>
		      		</div>
				</div>
			<?php }
		} ?>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>