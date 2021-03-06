<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row profil text-center">
        <?php
        while ($faces  =  $data->fetch()):
            $pixName = htmlspecialchars($faces['pictureName']);
            $pixDate = htmlspecialchars($faces['creation_date']);
            $pixType = htmlspecialchars($faces['kindOfPicture']);
            $pixNameWay = "app/upload/" . $pixName;
            echo "<div class=\"col\">
            <img alt=\"picture took by the user\" src=" . $pixNameWay . ">". $pixDate ."<br/>". "#" . $pixType . "</div>";
        endwhile; ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
