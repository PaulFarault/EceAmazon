<?php  $title = 'Ventes flash'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Ventes flash</h1>
    
    <div class="form-group">
        <h3>Retrouvez ici les articles les plus populaires de la semaine !</h3>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>