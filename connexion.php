<?php require_once('config.php'); ?>
<?php  $title = 'Connexion'; ?>

<?php ob_start(); ?>

<div class="row">
	<div class="col-sm">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title text-center mb-4 mt-1">Se connecter</h3>
				<form>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
			    				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 				</div>
							<input name="" class="form-control" placeholder="Email or login" type="email">
						</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
			    				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			 				</div>
		    				<input class="form-control" placeholder="******" type="password">
						</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> Login  </button>
					</div> <!-- form-group// -->
					<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title text-center mb-4 mt-1">S'inscrire</h3>
	    		<input type="button" value="S'inscrire">
	    	</div>
	    </div>
	</div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>