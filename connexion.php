<?php require_once('config.php'); ?>

<?php  $title = 'Connexion'; ?>

<?php ob_start(); ?>

	<?php
	if (isset($_POST) AND !empty($_POST)) {
		if (!empty(htmlspecialchars($_POST['mail'])) AND !empty(htmlspecialchars($_POST['mdp']))) {
			$req = $db->prepare('SELECT * FROM utilisateur WHERE mail = :mail AND mdp = :mdp');
			$req->execute([
				'mail' => $_POST['mail'],
				'mdp' => $_POST['mdp']

			]);
			$user = $req->fetchObject();
			if ($user) {
				$_SESSION['admin']= $_POST['mail'];
				header('location:admin.php');
			}else{
				$error = 'identifiants incorrect';
			}
		}
		else {
			$error = 'Veuillez remplir toutes les cases !';
		}
		if (isset($error)) {
			echo '<p>'. $error .'</p>';
		}
	}
?>

    <form method="link" action="admin.php">
        
        <div class="form-row">
        	<form action="connexion.php" method="POST">
                <div class="form-group col-md-6">
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" name ="mail" placeholder="adresse@exemple.com">
                </div>  

                <div class="form-group col-md-6">
                <label for="inputPassword">Mot de passe :</label>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                </div>

                <button class="btn btn-outline-secondary">Se connecter</button>
            </form>
        </div>
        
    </form>
	


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
