<?php $title = "hello"; ?>
<?php ob_start(); ?>

<div class="container" id="landing">
    <div class="row">
        <h2>Last Pix</h2>

        <?php
        while ($faces  =  $allFacesPics->fetch()) :
            $pixName = $faces['pictureName'];
            $pixDate = $faces['creation_date'];
            $pixType = $faces['kindOfPicture'];
            $pixNameWay = "app/upload/" . $pixName;
            echo "<div class=\"col-2 pix\"> <img src=" . $pixNameWay . ">" . $pixDate . "<br/>" . "#" . $pixType . "</div> ";
        endwhile; ?>
    </div>
</div>
<div class="container text-center" id="landing">

    <?php
    for ($i = 1; $i <= $nbPage; $i++) :
        if ($i == $currentPage) {
            echo "<a id=\"currentPageNumber\"> $i  </a>";
        } else {
            echo " <a id=\"paginNumber\" href=\"index.php?p=$i\" >$i</a>";    
        }
    endfor;
    ?>

</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>