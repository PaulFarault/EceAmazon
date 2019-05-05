<?php  $title = 'Item'; 
require_once('config.php');
$id_item = $_GET["i"];

$sql = 'SELECT * FROM item WHERE id_item ="'. $id_item . '"';
?>


<?php ob_start(); 



if($resultat = mysqli_query($db,$sql)){
	$item=mysqli_fetch_assoc($resultat);
?>

<h2><?php echo(utf8_encode($item["nom"])); ?> - <?php echo(utf8_encode($item["pu"])); ?> €</h2>

<div class="row vignettes">
	<div class="col-3">
		<img class="img-fluid" src= <?php printf('"%s"', $item['photos']); ?> >
	</div>
</div>
<div class="row">
	<div class="col">
		<p><?php echo(utf8_encode($item["description"])); ?></p>
	</div>
	<div class="col-md-3">
		
		<form class="form-group row">
			<label for="id" class="col-form-label">Quantité :</label>
			<div class="col">
  				<input class="form-control" id="qte" type="number" value="1" min="0" step="1" onblur="total()">
  			</div>
  		</form>
  		<div class="row">
  			<div class="col">
  				<p><b>Total : <span id="tot"><?php echo(utf8_encode($item["pu"])); ?> €</b></span></p>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col">
  				<button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | Ajouter au panier</button>
  			</div>
  		</div>
	</div>
</div>

<script type="text/javascript">
	function total(){
	document.getElementById("tot").innerHTML = <?=$item["pu"]; ?> * Number(document.getElementById("qte").value) + " €";}
</script>


<?php
}
$content = ob_get_clean(); ?>

<?php require('template.php'); ?>