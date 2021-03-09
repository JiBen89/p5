<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row profil text-center">
        <?php
        while ($pics  =  $data->fetch()):
            $pixName = htmlspecialchars($pics['pictureName']);
            $pixDate = htmlspecialchars($pics['creation_date']);
            $pixType = htmlspecialchars($pics['kindOfPicture']);
            $pixNameWay = "app/upload/" . $pixName;
            echo "<div class=\"col\">
            <img alt=\"picture took by the user\" src=" . $pixNameWay . ">". $pixDate ."<br/>". "#" . $pixType . "</div>";
        endwhile; ?>

    </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
