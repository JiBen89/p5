<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row profil text-center">
        <?php
        while ($faces  =  $data->fetch()) {
            $pixName = $faces['pictureName'];
            $pixDate = $faces['creation_date'];
            $pixType = $faces['kindOfPicture'];
            $pixNameWay = "upload/" . $pixName;
            echo "<div class=\"col\">
            <img src=" . $pixNameWay . ">" 
            . $pixDate . "<br/>"
            . "#" . $pixType . "</div>";
        } ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
