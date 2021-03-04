<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="text-center">
    <div class="row" id="type">
        <h1> </h1>
    </div>
</div>
<div class="container">
    <h1 class="text-center">Ta photo sera rangé dans la catégorie : <?php echo $_GET['action'] ?></h1>
    <form method="POST" action="index.php?action=storeImage">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br />
                
                <input type="hidden" name="image" class="image-tag">
                <i class="fas fa-camera"><input id="btnShoot" type=button value="Shot me bad-boy" class="camera2" onClick="take_snapshot()"></i>
                <i class="fas fa-stopwatch"></i>
                <input id="kindOf" type="hidden" name="kindOf" value="<?php echo $_GET['action'] ?>" />
                <input id="idUser" type="hidden" name="idUser" value="<?php echo $_SESSION["idUser"] ?>" />
            </div>
            <div class="col-md-6">
                <div id="results">Aperçu</div>
            </div>
            <div class="col-md-12 text-center">
                <br />
                <button class="btn btn-success" id="btnSubmit">Envoyer</button>
            </div>
        </div>
    </form>
</div>
<script language="JAVASCRIPT" src="app/JS/webcam.js"></script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>