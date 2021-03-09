<?php $title = "hello"; ?>
<?php ob_start(); ?>

<div class="container landing">
    <div class="row my-3">
        <h2>Last Pix</h2>

        <?php
        while ($faces  =  $allFacesPics->fetch()) :
            $pixName = htmlspecialchars($faces['pictureName']);
            $pixDate = htmlspecialchars($faces['creation_date']);
            $pixType = htmlspecialchars($faces['kindOfPicture']);
            $pixNameWay = "app/upload/" . $pixName;
            ?>
            <div class="col-6 col-sm-4 col-lg-2 my-1 pix"> 
            <img alt="picture took by the user" src="<?php echo $pixNameWay ?>">
            <div class="pixIndication">
            <?= $pixType . "<br/>". $pixDate ?>
            </div>
            </div>

        <?php endwhile; ?>

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