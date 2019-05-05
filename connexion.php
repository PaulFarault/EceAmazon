<?php require_once('config.php'); ?>
<?php  $title = 'Connexion'; ?>

<?php ob_start(); ?>

    <form method="link" action="compte.php">
        
        <div class="form-row">
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" id="inputEmail" placeholder="adresse@exemple.com">
            </div>
        </div>
            
        <div class="form-row">
            
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Mot de passe :</label>
                <input type="mail" class="form-control" id="inputPassword" placeholder="Mot de passe">         
            </div>
        </div><br>
            
        <div class="form-row">
            
            <div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-5">
                <a href="inscription.php"><button type="button" class="btn btn-primary">S'inscrire</button></a>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </div>
        
    </form>
	


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
