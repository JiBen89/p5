<?php $title = "Pourquoi ?"; ?>
<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <p>On peut être a même de se demander, pourquoi faire ce site ? Qu'elle est l'utilité ?</p>
        </div>
        <div class="col">
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>