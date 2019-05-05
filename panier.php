<!-- Page du panier : regroupe les éléments désirés par l'acheteur, permet de les modifier, 
    affiche le prix total du panier et de passer à la phase d'achat -->

<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

    <h1>Votre panier</h1><br><br>
    
    <div class="form-row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-3">Prix total :
        </div>
        <div class="form-group col-md-3">
            <a href="livraison.php"><button type="button" class="btn btn-primary">Acheter</button></a>
        </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>