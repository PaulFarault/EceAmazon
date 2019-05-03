<?php require_once('config.php'); ?>

<?php  $title = 'Catégories'; ?>

<?php ob_start(); ?>

	<h1><?php echo(utf8_encode($title); ?></h1>


		<?php $sql = "SELECT * FROM item WHERE id_categorie = 1";

		if($resultat = mysqli_query($db,$sql)) {  
			while ($ligne = mysqli_fetch_assoc($resultat)) {
				echo(utf8_encode($ligne["nom"]);?>
				<img src=<?php printf('"%s"', $ligne["photos"]);?>>
			<?php }
		} else {
			echo "Dsl, rien en vente aujourd'hui :(";
		} ?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>