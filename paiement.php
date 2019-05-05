<!-- Page de paiement, permet à l'acheteur de rentrer ses informations de paiement, avant de valider l'achat -->

<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Information sur le paiement</h1>
    
    <!-- Formulaire sur le paiement -->
    <form method="link" action="validation.php">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputNomCarte">Nom indiqué sur la carte :</label>
                <input type="text" class="form-control" id="inputNomCarte" placeholder="Nom sur la Carte">
            </div>
            <div class="form-group col-md-2">
                <label for="inputType">Type :</label>
                <select type="text" class="form-control" id="inputTypeCarte" placeholder="Type de carte">
                    <option>Visa</option>
                    <option>MasterCard</option>
                    <option>American Express</option>
                    <option>Paypal</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputNomCarte">Date d'expiration :</label>
                <input type="month" class="form-control" id="inputDateExp" placeholder="08-2019">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputNumCarte">Numéro de la carte :</label>
                <input type="number" class="form-control" id="inputNumCarte" placeholder="1234 2345 3456 4567">
            </div>
            <div class="form-group col-md-2">
                <label for="inputSecuCarte">Code de sécurité :</label>
                <input type="number" class="form-control" id="inputSecuCarte" placeholder="123">
            </div>
        </div><br><br>
    
        <div class="form-row">
                <div class="form-group col-md-8">
                    <a href="livraison.php"><button type="button" class="btn btn-primary">Retour à la livraison</button></a>
                </div>
                <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Étape suivante</button>
            </div>
        </div>
    </form>
    

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>