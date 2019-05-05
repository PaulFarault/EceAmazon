<?php require_once('config.php'); ?>
<?php  $title = 'Connexion'; ?>

<?php ob_start(); ?>

    <form method="link" action="admin.php">
        
        <div class="form-row">
        
            <div class="form-group col-md-6">
                <div class="form-group col-md-6">
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" id="inputEmail" placeholder="adresse@exemple.com">
                </div>  
            </div>
        <div/>
            
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group col-md-6">
                <label for="inputPassword">Mot de passe :</label>
                <input type="mail" class="form-control" id="inputPassword" placeholder="Mot de passe">
                </div>           
            </div>
        </div>
            
            <div class="form-group col-md-5">
            </div>
            <div class="form-group col-md-7">
                
                
            </div>
            
        </div>
        
    </form>
	


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>