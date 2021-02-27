<?php $title = "Photo prise";
ob_start(); ?>

<div class="container text-center">
    <div class="row">
        <div class="col">


            <?php
            $img = $_POST['image'];
            $folderPath = "upload/";

            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];

            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.png';

            $file = $folderPath . $fileName;
            file_put_contents($file, $image_base64);
            print_r($fileName);
            ?>
            <h2>Cette Photo vous convient-elle ?</2h>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <img src="<?php echo $file = $folderPath . $fileName; ?>">
            <form action="index.php?action=sendToDb" method="POST">
                <input id="KindPix" type="text" name="kindOf" value="<?php echo $_POST['kindOf'] ?>" />        
                <input id="pixName" type="hidden" name="fileName" value="<?php echo $fileName ?>" />        
                <button value="submit" class="btn btn-success">YES !</button>
            </form>
            <a href="index.php?action=takePicture"><button value="retake" class="btn btn-danger">No-way I want another one !</button></a>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('template.php'); ?>