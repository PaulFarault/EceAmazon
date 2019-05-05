<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Ajouter un vendeur</h1>
    
        
    <form method="link" action="admin.php">
    
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
            <div class="form-group col-md-5"></div>
            <div class="form-group col-md-7">
                <button type="submit" class="btn btn-primary">Ajouter un article</button>
            </div>
        </div>
        
    
    </form>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>