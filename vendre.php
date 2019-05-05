<?php  $title = 'Vendre'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Vendre</h1>
    
    <div class="form-group">
        <h3>Vous avez quelque chose à vendre ? C'est par ici que ça se passe !</h3>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>