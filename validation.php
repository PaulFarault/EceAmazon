<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Résumé de votre commande</h1>
    
    <div class="form-row">
        <div class="form-group col-md-5">
            <h3>Liste des articles commandés :</h3>
        </div>
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-5"><h3>Informations de livraison :</h3></div>
    </div><br>
    
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-2"><h3>Prix total :</h3></div>
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-3">
            <a href="index.php"><button type="button" class="btn btn-primary">Valider votre commande</button></a>
        </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>