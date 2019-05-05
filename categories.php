<?php
	require_once('config.php');

	$get = $_GET["c"];

	switch ($get) {
		case 'livres':
			$id_cat = 1;
			$title = 'Livres';
			break;
		
		case 'musique':
			$id_cat = 2;
			$title = 'Musique';
			break;

		case 'vetements':
			$id_cat = 3;
			$title = 'Vêtements';
			break;

		case 'sports':
			$id_cat = 4;
			$title = 'Sports et loisir';
			break;

		default:
			$id_cat = 1;
			$title = 'Livres';
			break;
	}

	$sql = 'SELECT * FROM item WHERE id_categorie ="'. $id_cat . '"';

	?>

<?php ob_start(); ?>

	<h1><?php echo($title); ?></h1>

		<div class="row row-ed-height">

		<?php
		if($resultat = mysqli_query($db,$sql)) {
			while ($ligne = mysqli_fetch_assoc($resultat)) {
		?>
		
			<div class="col-sm liste-item">
				<a href= <?php printf("item.php?i=%s", $ligne['id_item']); ?> >
				<div class="liste-item-img"><img src= <?php printf('"%s"', $ligne['photos']); ?> ></div>
				<div class="liste-item-content">
					<h3 class="card-title"> <?php echo(utf8_encode($ligne["nom"])); ?> - <span><?php echo(utf8_encode($ligne["pu"])); ?> €</span></h3>
					<p class="card-text"> <?php echo(utf8_encode($ligne["description"])); ?> </p>
				</div>
				</a>
			</div>
		
		<?php }
		}
		?>
	</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>