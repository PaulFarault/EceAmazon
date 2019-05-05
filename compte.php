<?php require_once('config.php'); ?>

<?php  $title = 'Compte'; ?>

<?php ob_start(); ?>

<h1><?php echo($title); ?></h1>

    <div class="form-row">
        <img src="/img/pp.png" height="100px">
    </div><br><br>

    <div class="form-row">
        <div class="form-group col-md-5"><h3>Information de livraison : </h3></div>
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-5"><h3>Information de paiement : </h3></div>
    </div><br><br>

    <div class="form-row">
        <div class="form-group col-md-6">
        </div>
        <div class="form-group col-md-3">
            <a href="modification_informations.php"><button type="button" class="btn btn-primary">Modifiez vos informations personnelles</button></a>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>