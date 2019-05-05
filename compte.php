<?php require_once('config.php'); ?>

<?php  $title = 'Compte'; ?>

<?php ob_start(); ?>

<h1><?php echo($title); ?></h1>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>