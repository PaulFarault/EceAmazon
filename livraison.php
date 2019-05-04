<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Information de livraison</h1><br>
    
    
    <!-- Formulaire d'information sur la livraison -->
    <form method="link" action="paiement.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNom">Nom :</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNom">Prénom :</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddresse1">Addresse (ligne 1) :</label>
            <input type="text" class="form-control" id="inputAddresse1" placeholder="Numéro, voie">
        </div>
        <div class="form-group">
            <label for="inputAddresse2">Addresse (ligne 2) :</label>
            <input type="text" class="form-control" id="inputAddresse2" placeholder="Numéro d'appartement, étage, ...">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
               <label for="inputCP">Code Postal :</label>
                <input type="number" class="form-control" id="CP" placeholder="75000"> 
            </div>
            <div class="form-group col-md-5">
                <label for="inputVille">Ville :</label>
                <input type="text" class="form-control" id="Ville" placeholder="Ville">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPays">Pays :</label>
                <input type="text" class="form-control" id="Pays" placeholder="Pays">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputTel">Numéro de téléphone :</label>
                <input type="text" class="form-control" id="Tel" placeholder="06 00 00 00 00">
            </div>
        </div>
            
            <div class="form-row">
                <div class="form-group col-md-10">
                    <a href="panier.php"><button type="button" class="btn btn-primary">Retour au panier</button></a>
                </div>
                <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Étape suivante</button>
                </div>
            </div>
    </form>
    
    
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>