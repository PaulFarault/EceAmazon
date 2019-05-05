<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Ajouter un vendeur</h1>
    
        
    <form method="link" action="gestion_vendeur.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNom">Nom indiqué sur la carte :</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrenom">Prénom :</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" id="inputEmail" placeholder="adresse@exemple.com">
            </div>
        </div><br>
        
        <!-- Boutton submit -->
        <div class="form-row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-9">
                <a href="gestion_vendeur.php"><button type="button" class="btn btn-primary">Ajouter un vendeur</button></a>
                <button type="submit" class="btn btn-primary">Ajouter un vendeur</button>
            </div>
        </div>
        
    
    </form>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>