<!-- Page d'ajout d'item, permet à l'utilisateur de mettre en vente un article -->

<?php  $title = 'Panier'; ?>
<?php ob_start(); ?>

<div id="content">

	<h1>Ajouter un article</h1>
    
    <!-- Formulaire de mise en ligne d'un item -->
    <form method="link" action="vendre.php">
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitre">Titre de l'annonce :</label>
                <input type="text" class="form-control" id="inputTitre" placeholder="Nom de l'article vendu">
            </div>
        </div>    
            
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDescription">Ajouter une description :</label>
                <textarea class="form-control" id="inputDescription" placeholder="Description de l'article"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDescription">Ajouter des variations :</label>
                <textarea class="form-control" id="inputVariation" placeholder="Variation de l'article"></textarea>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrix">Prix unitaire (en &euro;) :</label>
                <input type="number" step="0.01" class="form-control" id="inputPrix" placeholder="1">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhoto">Ajouter une photo ou une vidéo :</label>
                <input type="file" class="form-control" id="inputPhoto" placeholder="Importer un fichier">
            </div>
                
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputQte">Quentité disponible :</label>
                <input type="number" class="form-control" id="inputQte" placeholder="1"><br>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCategorie">Catégorie :</label>
                <select type="text" class="form-control" id="inputCategorie" placeholder="">
                    <option>Livres</option>
                    <option>Musique</option>
                    <option>Vêtements</option>
                    <option>Sports et loisirs</option>
                </select>
            </div>
        </div>
    
        <!-- Boutton submit : finalise la mise en ligne et rammène l'utilisateur à la page vendre.php -->
        <div class="form-row">
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Ajouter votre article</button>
            </div>
        </div>
        
    </form>
    
</div>


<!-- Appel du template -->
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>