<!-- Page de ventes-flash : censée contenir les articles les plus vendu de la semaine,
    par catégorie -->

<?php  $title = 'Ventes flash'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Ventes flash</h1><br>
    
    <div class="form-group">
        <h3>Retrouvez ici les articles les plus populaires de la semaine !</h3>
    </div><br>
    
    <div class="row">
        <div class="col-sm-3"><h5>Livres :</h5></div>
        <div class="col-sm-3"><h5>Musique :</h5></div>
        <div class="col-sm-3"><h5>Vêtements :</h5></div>
        <div class="col-sm-3"><h5>Sports et loisirs :</h5></div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>