<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container text-center" id="landing">
    <div class="row">
        <h2>Last Pix</h2>

            <?php
            while ($faces  =  $allFacesPics->fetch()) {
                $pixName = $faces['pictureName'];
                $pixDate = $faces['creation_date'];
                $pixType = $faces['kindOfPicture'];
                $pixNameWay = "upload/" . $pixName;
                echo "<div class=\"col-2 pix\"> <img src=" . $pixNameWay . ">" . $pixDate . "<br/>" . "#" . $pixType . "</div> ";
            } ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>