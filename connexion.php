<?php require_once('config.php'); ?>
<?php  $title = 'Connexion'; ?>

<?php ob_start(); ?>

<div class="row">
	<div class="col-sm">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title text-center mb-4 mt-1">Se connecter</h3>
                
                <form method="link" action="compte.php">
                  <div class="row">
                    <div class="col">
                        <label for="inputPhoto">Ajouter une photo ou une vidéo :</label>
                        <input type="photo" class="form-control" placeholder="Ajouter un fichier">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name">
                    </div>
                  </div>
                </form>
            
		  </div>
	   </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>