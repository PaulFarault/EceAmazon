<!-- Modifications informations personnelles de l'utilisateur -->

<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Modifiez vos informations</h1>
    
    <form method="link" action="compte.php">
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputNom">Nom :</label>
                <input type="text" class="form-control" id="inputNom" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputNomCarte">Nom indiqué sur la carte:</label>
                <input type="text" class="form-control" id="inputNomCarte" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputNom">Prénom :</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputType">Type :</label>
                <select type="text" class="form-control" id="inputTypeCarte" placeholder="">
                    <option>Visa</option>
                    <option>MasterCard</option>
                    <option>American Express</option>
                    <option>Paypal</option>
                </select>
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputAddresse1">Addresse (ligne 1) :</label>
                <input type="text" class="form-control" id="inputAddresse1" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputNomCarte">Date d'expiration :</label>
                <input type="month" class="form-control" id="inputDateExp" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputAddresse2">Addresse (ligne 2) :</label>
                <input type="text" class="form-control" id="inputAddresse2" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputNumCarte">Numéro de la carte :</label>
                <input type="number" class="form-control" id="inputNumCarte" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputCP">Code Postal :</label>
                <input type="number" class="form-control" id="CP" placeholder=""> 
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputSecuCarte">Code de sécurité :</label>
                <input type="number" class="form-control" id="inputSecuCarte" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputVille">Ville :</label>
                <input type="text" class="form-control" id="Ville" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputPays">Pays :</label>
                <input type="text" class="form-control" id="Pays" placeholder="">
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
        <div class="form row">
            <div class="form-group col-md-5">
                <label for="inputTel">Numéro de téléphone :</label>
                <input type="text" class="form-control" id="Tel" placeholder=""> 
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
            </div>
            <div class="form-group col-md-1"></div>
        </div><br><br>
        
        <div class="form row">
            <div class="form-group col-md-5"> 
               <a href="compte.php"><button type="button" class="btn btn-primary">Retour à votre compte</button> </a>
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <button type="submit" class="btn btn-primary">Valider les modifications</button>
            </div>
            <div class="form-group col-md-1"></div>
        </div>
        
    </form>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>