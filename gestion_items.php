<!-- Page de gestion des items, accessible par les utilisateurs de statut administrateur et vendeur -->

<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Gestion des articles</h1>
    
    <div class="form-row">
        <!-- Ajout d'un vendeur -->
        <div class="form-group col-md-5">
            <h2>Ajouter un article</h2>
            <div class="card" style="widht: 15rem;">
				<a href="ajouter_item.php"><img class="card-img-top" alt="Photo introuvable" src="/img/item.png" ></a>
            </div>
        </div>
        
        
        <div class="form-group col-md-1"></div>
        <!-- Supression d'un vendeur -->
        <div class="form-group col-md-5">
            <h2>Supprimer un item</h2>
            <form>
                <label for="inputId">Identifiant de l'article :</label>
                <input type="number" class="form-control" id="inputId" placeholder="1234"><br>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        </div>
                        <div class="form-group col-md-7">
                            <button type="submit" class="btn btn-primary">Supprimer l'article</button></div>
                    </div>
            </form>
        </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>