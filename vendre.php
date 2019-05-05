<!-- Page permettant aux vendeurs de remplir un formulaire de vente afin de mettre en ligne
    son annonce -->


<?php  $title = 'Vendre'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Vendre</h1>
    
    <div class="form-group">
        <h3>Vous avez quelque chose à vendre ? C'est par ici que ça se passe !</h3><br>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-4"></div>
        <div class="form-group col-md-3">
            <a href="ajouter_item.php"><button type="button" class="btn btn-primary">Vendre un nouvel article</button></a></div>
        <div class="form-group col-md-4">
            <a href="gestion_items.php"><button type="button" class="btn btn-primary">Supprimer un de vos articles</button></a>
        </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>