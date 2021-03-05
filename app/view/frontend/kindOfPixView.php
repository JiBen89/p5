<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="container text-center">
    <h2>Alors <?php echo $_SESSION['pseudo'] ?> que souhaite tu prendre en photo ? </h2>
</div>
<div class="container text-center" id="kindOfPics">
    <div class="row">
        <div class="col-6">
            <button type="button" id="paysage"><a href="index.php?action=landscapePix" class="text-white"><img src="app/images/paysage.png" alt="paysage" style="width: 150px; height: 150px;"></a></button>
        </div>
        <div class="col-6">
            <button type="button" id="corp"><a href="index.php?action=bodyPix" class="text-white"><img src="app/images/corp.png" alt="corp" style="	width: 150px; height: 150px;"></a></button>
        </div>
        <div class="col-6">
            <button type="button" id="visage"><a href="index.php?action=facePix" class="text-white"><img src="app/images/visage.jpg" alt="visage" style="	width: 150px; height: 150px;"></a></button>
        </div>
        <div class="col-6">
            <button type="button" id="travaux"><a href="index.php?action=worksPix" class="text-white"><img src="app/images/travaux.jpg" alt="travaux" style="	width: 150px; height: 150px;"></a></button>
        </div>
        <div class="col-6">
            <button type="button" id="libre"><a href="index.php?action=freePix" class="text-white"><img src="app/images/free.jpg" alt="libre" style="	width: 150px; height: 150px;"></a></button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-danger"  style="	width: 150px; height: 150px;"><a href="index.php" class="text-white">Rien</a></button>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>