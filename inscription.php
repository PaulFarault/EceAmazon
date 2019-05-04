<?php  $title = 'Panier'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1>Inscription</h1>
    
    <!-- Formulaire d'inscription -->
    <form method="link" action="compte.php">
        <div class="form-group">
            <label for="inputNom">Nom :</label>
            <input type="text" class="form-control" id="inputNom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="inputPrenom">Prénom :</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="inputPseudo">Pseudo :</label>
            <input type="text" class="form-control" id="inputPseudo" placeholder="Pseudo">
        </div>
        <div class="form-group">
            <label for="inputEmail">Adresse mail :</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="adresse@exemple.com">
        </div>
        <div class="form-group">
            <label for="inputEmailConf">Confirmez votre adresse mail :</label>
            <input type="email" class="form-control" id="inputEmailConf" placeholder="adresse@exemple.com">
        </div>
        <div class="form-group">
            <label for="inputPassword">Mot de passe :</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputPasswordConf">Confirmez votre mot de passe :</label>
            <input type="password" class="form-control" id="inputPasswordConf" placeholder="Password">
        </div><br><br>
        <div class="form-row">
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </div>
    </form>
        
    

</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>