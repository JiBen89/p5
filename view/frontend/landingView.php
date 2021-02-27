<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container text-center">
    <?php if (isset($_SESSION['pseudo'])):
        echo   ' <h2>Bonjour ' . $_SESSION['pseudo'] . ' </h2>';
    endif;
    ?>
        
</div>
<div class="container text-center">
<div class="row">
<h2>face Pix</h2>
<div class="col-12">

</div>
</div>
<div class="row">
<h2>body Pix</h2>
<div class="col-12">

</div>
</div>
<div class="row">
<h2>Works Pix</h2>
<div class="col-12">

</div>
</div>
<div class="row">
<h2>Landscape Pix</h2>
<div class="col-12">

</div>
</div>
<div class="row">
<h2>Free Pix</h2>
<div class="col-12">

</div>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>