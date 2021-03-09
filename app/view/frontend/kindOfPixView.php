<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="container text-center my-3">
    <h2>Alors <?php echo htmlspecialchars($_SESSION['pseudo']) ?> que souhaite tu prendre en photo ? </h2>
</div>
<div class="container text-center" id="kindOfPics">
    <div class="row">
        <div class="col-12 col-md-6  col-lg-3 cat">
            <button type="button" id="paysage" class="button_cat"><a href="index.php?action=landscapePix" class="text-white"><img src="app/images/landscape.png" alt="paysage" style="width: 150px; height: 150px;">Paysages</a></button>
        </div>
        <div class="col-12 col-md-6 col-lg-3 cat">
            <button type="button" id="corp" class="button_cat"><a href="index.php?action=bodyPix" class="text-white"><img src="app/images/corp.png" alt="corp" style="	width: 150px; height: 150px;">Corp</a></button>
        </div>
        <div class="col-12 col-md-6  col-lg-3 cat">
            <button type="button" id="visage" class="button_cat"><a href="index.php?action=facePix" class="text-white"><img src="app/images/face.png" alt="visage" style="	width: 150px; height: 150px;">Visage</a></button>
        </div>
        <div class="col-12 col-md-6  col-lg-3 cat">
            <button type="button" id="travaux" class="button_cat"><a href="index.php?action=worksPix" class="text-white"><img src="app/images/travaux.png" alt="travaux" style="	width: 150px; height: 150px;">Travaux</a></button>
        </div>
        <div class="col-12 col-md-6  col-lg-3 cat">
            <button type="button" id="libre" class="button_cat"><a href="index.php?action=freePix" class="text-white"><img src="app/images/free.jpg" alt="libre" style="	width: 150px; height: 150px;">Libre</a></button>
        </div>
        <div class="col-12 col-md-6  col-lg-3 cat">
            <button type="button" class="btn btn-danger button_cat"  style="	width: 150px; height: 150px;"><a href="index.php" class="text-white">Rien</a></button>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>