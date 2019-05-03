<?php  $title = 'Admin'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Page administrateur</h1>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>