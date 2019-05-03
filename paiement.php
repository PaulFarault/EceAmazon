<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Information sur le paiement</h1>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>