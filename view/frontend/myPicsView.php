<?php $title = "hello"; ?>
<?php ob_start(); ?>
<?php 
while ($data = $pix->fetch())
{
    $data['pictureName'];
}

?>
<?php
$content = ob_get_clean(); 
require('template.php'); 