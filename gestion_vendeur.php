<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Gestion des vendeurs</h1>
    
    <div class="form-row">
        <!-- Ajout d'un vendeur -->
        <div class="form-group col-md-5">
            <h2>Ajouter un vendeur</h2>
            <div class="card" style="widht: 15rem;">
				<a href="ajouter_vendeur.php"><img class="card-img-top" alt="Photo introuvable" src="/img/vendeur.jpg" ></a>
            </div>
        </div>
        
        
        <div class="form-group col-md-1"></div>
        <!-- Supression d'un vendeur -->
        <div class="form-group col-md-5">
            <h2>Supprimer un vendeur</h2>
            <form>
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" id="inputEmail" placeholder="adresse@exemple.com"><br>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        </div>
                        <div class="form-group col-md-7">
                            <button type="submit" class="btn btn-primary">Supprimer le vendeur</button></div>
                    </div>
            </form>
        </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>