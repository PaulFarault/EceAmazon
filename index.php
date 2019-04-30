<?php require_once('config.php'); ?>

<?php  $title = 'Catégories'; ?>

<?php ob_start(); ?>

<div id="content">

	<h1><?php echo($title); ?></h1>

	<div class="row">
		<?php $sql ="SELECT * FROM categorie";

		if($resultat = mysqli_query($db,$sql)) {  
			while ($ligne = mysqli_fetch_assoc($resultat)) { ?>

				<div class="col-sm-3">
					<div class="panel panel-default">
				        <div class="panel-heading"><h3><?php echo($ligne["nom"]); ?></h3></div>
				        <div class="panel-body"><img src=<?php printf('"/PISCINE%s"', $ligne["image"]); ?> class="img-responsive" style="background-size: 50px 50px;" alt="Image"></div>
				        <div class="panel-footer"><?php echo($ligne["description"]); ?></div>
		      		</div>
				</div>

		<?php
			}
		} ?>
	</div>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>