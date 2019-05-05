<?php session_start();

require_once '../config.php';

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

    <form method="POST" action="index.php">
        
                <label for="inputEmail">Adresse mail :</label>
                <input type="mail" class="form-control" name ="mail" placeholder="adresse@exemple.com">
                <label for="inputPassword">Mot de passe :</label>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">

                <button class="btn btn-outline-secondary">Se connecter</button>
        
    </form>