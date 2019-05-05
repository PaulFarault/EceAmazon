<!-- Code PHP permettant de générer les pages des articles -->

<?php  $title = 'Item'; 
require_once('config.php');
$id_item = $_GET["i"];

$sql = 'SELECT * FROM item WHERE id_item ="'. $id_item . '"';
?>


<?php ob_start(); 



if($resultat = mysqli_query($db,$sql)){
	$item=mysqli_fetch_assoc($resultat);
?>

<h2><?php echo(utf8_encode($item["nom"])); ?></h2>

<div class="row">
	<div class="col-12">
		<img src= <?php printf('"%s"', $item['photos']); ?> >
	</div>
	<div class="col-6"> <p><?php echo(utf8_encode($item["description"])); ?></p> </div>
	<div class="col-6"></div>
</div>

<?php
}
$content = ob_get_clean(); ?>

<?php require('template.php'); ?>