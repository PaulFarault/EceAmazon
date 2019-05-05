<?php  $title = 'Item'; 
require_once('config.php');
$id_item = $_GET["i"];

$sql = 'SELECT * FROM item WHERE id_item ="'. $id_item . '"';
?>


<?php ob_start(); 



if($resultat = mysqli_query($db,$sql)){
	$item=mysqli_fetch_assoc($resultat);}
echo($item['description']);
?>

	

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>