<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Ajouter un article</h1>
    
    <form>
      <div class="row">
        <div class="col">
            <label for="inputPhoto">Ajouter une photo ou une vidéo :</label>
            <input type="file" class="form-control" id="inputPhoto" placeholder="Importer un fichier"><br>
            <label for="inputDescription">Ajouter une description :</label>
            <textarea class="form-control" id="inputDescription" placeholder="Description de l'article"></textarea><br>
            <label for="inputQte">Quentité disponible :</label>
            <input type="number" class="form-control" id="inputQte" placeholder="1"><br>
        </div>
        </div>
        <div class="col">
            <label for="inputDescription">Ajouter des variations :</label>
            <!input type="textarea" class="form-control" id="inputDescription" placeholder="Description de l'article">
            <textarea class="form-control" id="inputDescription" placeholder="Description de l'article"></textarea><br>
            <label for="inputPrix">Prix unitaire (en &euro;) :</label>
            <input type="number" class="form-control" id="inputPrix" placeholder="1"><br>
            <label for="inputCategorie">Catégorie :</label>
                <select type="text" class="form-control" id="inputCategorie" placeholder="">
                    <option>Livres</option>
                    <option>Musique</option>
                    <option>Vêtements</option>
                    <option>Sports et loisirs</option>
                </select>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>